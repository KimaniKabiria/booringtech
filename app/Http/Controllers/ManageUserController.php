<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use DB;
use Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ManageUserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id','desc')->paginate(10);
        return view('manage.users.index')->withUsers($users);
    }

    public function create()
    {
      $roles = Role::all();
      return view('manage.users.create')->withRoles($roles);
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users'
        ]);
        $password = trim($request->password);
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($password);
        $user->save();

        if ($request->roles) {
          $user->syncRoles(explode(',', $request->roles));
        }

        return redirect()->route('users.show', $user->id);
    }

    public function show($id)
    {
        $user = User::where('id', $id)->with('roles')->first();
        return view("manage.users.show")->withUser($user);
    }

    public function edit($id)
    {
        $roles = Role::all();
        $user = User::where('id', $id)->with('roles')->first();
        return view("manage.users.edit")->withUser($user)->withRoles($roles);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email,'.$id
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->passwordOptions == 'change') {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        $user->syncRoles(explode(',', $request->roles));
        return redirect()->route('users.show', $id);
    }

    public function destroy($id)
    {
        //
    }
}
