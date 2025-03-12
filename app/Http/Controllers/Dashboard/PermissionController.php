<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:view permission', ['only' => ['index']]);
        $this->middleware('permission:create permission', ['only' => ['create', 'store']]);
        $this->middleware('permission:update permission', ['only' => ['update', 'edit']]);
        $this->middleware('permission:delete permission', ['only' => ['destroy']]);
    }

    public function index()
    {
        try {
            $permissions = Permission::get();
            return view('dashboard.role-permission.permission.index', ['permissions' => $permissions]);
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('error', "Request Failed:" . $th->getMessage());
        }
    }

    public function create()
    {
        return view('dashboard.role-permission.permission.create');
    }

    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'name' => 'required|string|max:255|unique:permissions,name',
        ]);

        if ($validate->fails()) {
            return back()->withErrors($validate)->withInput($request->all())->with('error', 'Validation Error!');
        }

        try {

            $permission = new Permission();
            $permission->name = $request->name;
            $permission->save();

            return redirect()->route('dashboard.permissions.index')->with('success', 'Permission created successfully');
        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', "Request Failed:" . $th->getMessage());
        }
    }

    public function edit(Permission $permission)
    {
        return view('dashboard.role-permission.permission.edit', ['permission' => $permission]);
    }

    public function update(Request $request, Permission $permission)
    {
        $validate = Validator::make($request->all(), [
            'name' => 'required|string|max:255|unique:permissions,name,' . $permission->id,
        ]);

        if ($validate->fails()) {
            return back()->withErrors($validate)->withInput($request->all())->with('error', 'Validation Error!');
        }

        try {

            $permission->update([
                'name' => $request->name
            ]);

            return redirect()->route('dashboard.permissions.index')->with('success', 'Permission updated successfully');
        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', "Request Failed:" . $th->getMessage());
        }
    }

    public function destroy($permissionId)
    {
        try {

            $permission = Permission::findOrFail($permissionId);
            $permission->delete();

            return redirect()->route('dashboard.permissions.index')->with('success', 'Permission deleted successfully');
        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', "Request Failed:" . $th->getMessage());
        }
    }
}
