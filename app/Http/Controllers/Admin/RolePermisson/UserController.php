<?php

namespace App\Http\Controllers\Admin\RolePermisson;

use App\Http\Controllers\Controller;
use App\Http\Requests\RolePermission\User\StoreUserRequest;
use App\Http\Requests\RolePermission\User\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{


    public function __construct()
    {
        // Define permissions for actions
        $this->middleware('permission:user create', ['only' => ['create', 'store']]);
        $this->middleware('permission:user edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:user delete', ['only' => ['destroy']]);
        $this->middleware('permission:user view', ['only' => ['index']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::latest()->paginate(10);
        return view('admin.setting.rolePermission.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::orderBy('name', 'ASC')->get();
        return view('admin.setting.rolePermission.user.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:5|same:confirm_password',
            'confirm_password' => 'required',
            'role' => 'required|array|exists:roles,name',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $user->syncRoles($request->role);
        toast('User created successfully', 'success');

        return to_route('admin.user.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $roles = Role::orderBy('name', 'ASC')->get();
        $hasRole = $user->roles?->pluck('name')->toArray();
        // dd($hasRole);
        return view('admin.setting.rolePermission.user.edit', compact('user', 'roles', 'hasRole'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {

        $user->update($request->validated());
        $user->syncRoles($request->role);
        toast('User updated successfully', 'success');
        return to_route('admin.user.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    { {
            if ($user->id == Auth::user()->id) {
                toast('You cannot delete yourself', 'error');
                return back();
            }
            if ($user->hasRole('Super Admin')) {
                toast('You cannot delete super admin', 'error');
                return back();
            }
            if ($user->status === 1) {
                toast('You cannot delete user', 'error');
                return back();
            }

            $user->delete();
            toast('User deleted successfully', 'success');
            return back();
        }
    }
}
