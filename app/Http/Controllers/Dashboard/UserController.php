<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:view user', ['only' => ['index']]);
        $this->middleware('permission:create user', ['only' => ['create','store']]);
        $this->middleware('permission:update user', ['only' => ['update','edit']]);
        $this->middleware('permission:delete user', ['only' => ['destroy']]);
    }

    public function index()
    {
        try {
            $users = User::get();
            return view('dashboard.role-permission.user.index', ['users' => $users]);
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('error', "Request Failed:" . $th->getMessage());
        }
    }

    public function create()
    {
        try {
            $roles = Role::pluck('name','name')->all();
            return view('dashboard.role-permission.user.create', ['roles' => $roles]);
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('error', "Request Failed:" . $th->getMessage());
        }
    }

    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => [
                'required',
                'string',
                Password::min(8)
                    ->letters()
                    ->mixedCase()
                    ->numbers()
                    ->symbols()
            ],
            'password_confirmation' => 'required|same:password',
            'roles' => 'required'
        ]);

        if ($validate->fails()) {
            return back()->withErrors($validate)->withInput($request->all())->with('error', 'Validation Error!');
        }

        try {

            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();
    
            $user->syncRoles($request->roles);

            return redirect()->route('dashboard.user.index')->with('success','User created successfully with roles');
        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', "Request Failed:" . $th->getMessage());
        }
    }

    public function edit(User $user)
    {
        try {
            $roles = Role::pluck('name','name')->all();
            $userRoles = $user->roles->pluck('name','name')->all();
            return view('dashboard.role-permission.user.edit', [
                'user' => $user,
                'roles' => $roles,
                'userRoles' => $userRoles
            ]);
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('error', "Request Failed:" . $th->getMessage());
        }
    }

    public function update(Request $request, User $user)
    {
        $validate = Validator::make($request->all(), [
            'name' => 'required',
            'password' => [
                'nullable',
                Password::min(8)
                    ->letters()
                    ->mixedCase()
                    ->numbers()
                    ->symbols()
            ],
            'password_confirmation' => 'nullable|same:password',
            'roles' => 'required'
        ]);

        if ($validate->fails()) {
            return back()->withErrors($validate)->withInput($request->all())->with('error', 'Validation Error!');
        }

        try {

            $data = [
                'name' => $request->name,
            ];
    
            if(!empty($request->password)){
                $data += [
                    'password' => Hash::make($request->password),
                ];
            }
    
            $user->update($data);
            $user->syncRoles($request->roles);
    
            return redirect()->route('dashboard.user.index')->with('success','User updated successfully');

        } catch (\Throwable $th) {
            return redirect()->back()->with('error', "Request Failed:" . $th->getMessage());
            // throw $th;
        }
    }

    public function destroy($userId)
    {
        try {

            $user = User::findOrFail($userId);
            $user->delete();
            
            return redirect()->route('dashboard.user.index')->with('success','User deleted successfully');
        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', "Request Failed:" . $th->getMessage());
        }
    }
}