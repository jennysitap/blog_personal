<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function getUsers(){
        $data = User::all();
        //dd($data);
        return view("admin.users")
        ->with('usuarios',$data);
    }
    public function createUsers(){
        dd("Ya prendio tu");
    }
}
