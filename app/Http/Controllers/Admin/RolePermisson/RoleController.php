<?php

namespace App\Http\Controllers\Admin\RolePermisson;

use App\Http\Controllers\Controller;
use App\Http\Requests\RolePermission\Role\StoreRoleRequest;
use App\Http\Requests\RolePermission\Role\UpdateRoleRequest;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{


    public function __construct()
    {
        // Define permissions for actions
        $this->middleware('permission:role create', ['only' => ['create', 'store']]);
        $this->middleware('permission:role edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:role delete', ['only' => ['destroy']]);
        $this->middleware('permission:role view', ['only' => ['index']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles=Role::latest()->paginate(10);
        return view('admin.setting.rolePermission.Role.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $permissions = Permission::orderBy('name', "ASC")->get();
        return view('admin.setting.rolePermission.Role.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoleRequest $request)
    {
        $role = Role::create($request->validated());

        // If permissions are provided, assign them to the role
        if (!empty($request->permission)) {
            foreach ($request->permission as $name) {
                $role->givePermissionTo($name);
            }
        }
        toast('Role created successfully.', 'success');
        return to_route('admin.role.index');
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
    public function edit(Role $role)
    {
        $role = Role::findOrFail($role->id);
        $permissions = Permission::orderBy('name', 'ASC')->get();
        $hasPermissions = $role->permissions->pluck('name')->toArray();
        return view('admin.setting.rolePermission.Role.edit', compact('role', 'permissions', 'hasPermissions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoleRequest $request, Role $role)
    {

        $role = Role::findorFail($role->id);
        $role->update($request->validated());

        // If permissions are provided, assign them to the role
        if (!empty($request->permission)) {
            $role->syncPermissions($request->permission); // Syncs the provided permissions with the role
        } else {
            // If no permissions are provided, remove all permissions
            $role->syncPermissions([]);
        }
        toast('Role updated successfully.', 'success');
        return redirect()->route('admin.role.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        $role = Role::findorFail($role->id);
        if ($role === null) {
            return false;
        }
        $role->delete();
        toast('Role deleted successfully', 'success');
        return back();
    }
}
