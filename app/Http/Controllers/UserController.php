<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function handleRegister(Request $req){
        $req->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',

        ]);
        User::create([
            'name'=>$req->name,
            'email'=>$req->email,
            'password'=>Hash::make($req->password),
        ]);
        return redirect('/login');
    }
}