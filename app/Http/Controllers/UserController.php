<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserController extends Controller
{

    public function index()
    {
        $role_data = $this->fetch_role_data();
        return view('login',[
            'role_data'=>$role_data,
        ]);
    }

    public function user_create(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|max:50',
            'password'=>'required',
            'email'=>'required',
            'role_id'=>'required|not_in:0'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $hashedpassword = Hash::make($request->password);
        $user->password = $hashedpassword;
        $user->save();

        $user_id = User::max('id');
        $user = User::findorfail($user_id);

        $user->assignRole($request->role_id);

        return redirect()->route('login')->with('message','User Created Successfully');
    }

    public function authenticate(Request $request)
    {
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $name = Auth::user()->name;

            return redirect()->intended('/dashboard')->with('info','Welcome'.' '.$name.' '.'To School management System');

        }
        else{

            return redirect()->intended('/')->with('error',' Login Not matched');

        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('info',' Plz Visit Again');;
    }

    private function fetch_role_data()
    {
        $role_data = DB::table('roles')->get();
        return $role_data;
    }

}
