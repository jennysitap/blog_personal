<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UsersController extends Controller
{
    public function getUsers(){
        $data = User::all();
        //dd($data);
        return view("admin.users")
        ->with('usuarios',$data);
    }
    public function createUsers(Request $request){
        //dd($request->email);
        $request->validate([
            "name"=>'required|min:3',
            "nickname"=>'required|min:3|unique:users,nickname',
            "email"=>'required|email|unique:users,email',
            "password"=>'required|min:8',
            "password2"=>'required|min:8|same:password',
        ]);
        //guardar registro
        $user=new User ();
        $user->name=$request->name;
        $user->nickname=$request->nickname;
        $user->password=Hash::make($request->password);
        $user->email=$request->email;
        $user->img="default.jpg";
        $user->save();
        //dd("Usuario insertado");
        return redirect()
        ->back()
        ->with('success',"Usuario insertado correctamente");

    }
}
