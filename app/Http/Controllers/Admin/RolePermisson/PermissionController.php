<?php

namespace App\Http\Controllers\Admin\RolePermisson;

use App\Http\Controllers\Controller;
use App\Http\Requests\RolePermission\Permission\StorePermissionRequest;
use App\Http\Requests\RolePermission\Permission\UpdatePermissionRequest;
use App\Http\Requests\RolePermission\Role\UpdateRoleRequest;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{


    public function __construct()
    {
        // Define permissions for actions
        $this->middleware('permission:permission create', ['only' => ['create', 'store']]);
        $this->middleware('permission:permission edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:permission delete', ['only' => ['destroy']]);
        $this->middleware('permission:permission view', ['only' => ['index']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $permissions=Permission::latest()->paginate(10);
        return view ('admin.setting.rolePermission.permission.index',compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.setting.rolePermission.Permission.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePermissionRequest $request)
    {
        Permission::create($request->validated());
        toast('Permission created successfully','success');
        return to_route('admin.permission.index');
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
    public function edit(Permission $permission)
    {
        return view('admin.setting.rolePermission.permission.edit',compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePermissionRequest $request, Permission $permission)
    {
        $permission->update($request->validated());
        toast('Permission updated successfully','success');
        return to_route('admin.permission.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Permission $permission)
    {
        $permission->delete();
        toast('Permission deleted successfully','success');
        return back();
    }
}
