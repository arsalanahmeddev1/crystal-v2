<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:view role', ['only' => ['index']]);
        $this->middleware('permission:create role', ['only' => ['create', 'store', 'addPermissionToRole', 'givePermissionToRole']]);
        $this->middleware('permission:update role', ['only' => ['update', 'edit']]);
        $this->middleware('permission:delete role', ['only' => ['destroy']]);
    }

    public function index()
    {
        try {
            $roles = Role::get();
            return view('dashboard.role-permission.role.index', ['roles' => $roles]);
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('error', "Request Failed:" . $th->getMessage());
        }
    }

    public function create()
    {
        return view('dashboard.role-permission.role.create');
    }

    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'name' => 'required|string|max:255|unique:roles,name',
        ]);

        if ($validate->fails()) {
            return back()->withErrors($validate)->withInput($request->all())->with('error', 'Validation Error!');
        }

        try {

            $role = new Role();
            $role->name = $request->name;
            $role->save();

            return redirect()->route('dashboard.roles.index')->with('success', 'Role created successfully');
        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', "Request Failed:" . $th->getMessage());
        }
    }

    public function edit(Role $role)
    {
        return view('dashboard.role-permission.role.edit', [
            'role' => $role
        ]);
    }

    public function update(Request $request, Role $role)
    {
        $validate = Validator::make($request->all(), [
            'name' => 'required|string|max:255|unique:roles,name,' . $role->id,
        ]);

        if ($validate->fails()) {
            return back()->withErrors($validate)->withInput($request->all())->with('error', 'Validation Error!');
        }

        try {
            $role->update([
                'name' => $request->name
            ]);

            return redirect()->route('dashboard.roles.index')->with('success', 'Role updated successfully');
        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', "Request Failed:" . $th->getMessage());
        }
    }

    public function destroy($roleId)
    {
        try {

            $role = Role::findOrFail($roleId);
            $role->delete();
            
            return redirect()->route('dashboard.roles.index')->with('success','Role deleted successfully');
        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', "Request Failed:" . $th->getMessage());
        }
    }

    public function addPermissionToRole($roleId)
    {
        try {
            $permissions = Permission::get();
            $role = Role::findOrFail($roleId);
            $rolePermissions = DB::table('role_has_permissions')
                ->where('role_has_permissions.role_id', $role->id)
                ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
                ->all();
    
            return view('dashboard.role-permission.role.add-permissions', [
                'role' => $role,
                'permissions' => $permissions,
                'rolePermissions' => $rolePermissions
            ]);
            
        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', "Request Failed:" . $th->getMessage());
        }
    }

    public function givePermissionToRole(Request $request, $roleId)
    {
        $validate = Validator::make($request->all(), [
            'permission' => 'required',
        ]);

        if ($validate->fails()) {
            return back()->withErrors($validate)->withInput($request->all())->with('error', 'Validation Error!');
        }

        try {
            //code...
            $role = Role::findOrFail($roleId);
            $role->syncPermissions($request->permission);

            return redirect()->back()->with('success', 'Permissions assigned to role');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('error', "Request Failed:" . $th->getMessage());
        }
    }
}
