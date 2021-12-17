<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Arr;
use Illuminate\Testing\Fluent\Concerns\Has;

class userController extends Controller
{

    public function __constructor()
    {
        $this->middleware('auth');
        $this->middleware(['role:administrator']);
        $this->middleware(['role:staff']);
    }

    // public function createuser()
    // {
    //     $roles = Role::pluck('role_id', 'role')->all();
    //     return view('users.create_user', compact('roles'));
    // }


    public function createuser()
    {
        $roles = Role::orderBy('role_id', 'ASC')->get();
        return view('users.create_user', compact('roles'));
    }
    // public function userstore(Request $request)
    // {
    //     $this->validate($request, [
    //         'email' => 'required|email|unique',
    //         'password' => 'required',
    //         'roles' => 'reqiured'
    //     ]);
    // $input = $request->all();
    // $input['password'] = Hash::make($input['password']);


    // $user = User::create('$input');
    // $user->assignRole($request->input('roles'));

    // if (!empty($request->password)) {
    //     $password = trim($request->password);
    // } else {
    //     $password = "password";
    // }

    // $user = new User;
    // $user->email = $request->email;
    // $user->password = Hash::make($password);

    // $user->save();


    //     return redirect()->route('users.createuser')
    //         ->with('user_created', 'User created successfully');
    // }

    public function userstore(Request $request)
    {
        $this->validate($request, [
            // 'name' => 'required|max:255',
            'email' =>  'required|email|unique:users',

        ]);
        if (!empty($request->password)) {
            $password = trim($request->password);
        } else {
            $password = "password";
        }
        $user = new User;
        $user->name = $request->name;
        // $user->phone_NO = $request->phone_NO;
        $user->email = $request->email;
        $user->role_id = $request->roles;
        $user->password = Hash::make($password);

        $user->save();
        // if ($request->roles) {
        //     $user->syncRoles(explode(',', $request->roles));
        // }

        return redirect()->route('createuser')
            ->with('user_created', 'User created successfully');
    }
}
