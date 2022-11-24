<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


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

    public function LoginUser(Request $req){
        
        $req->validate([
            
            'email' => 'required',
            'password' => 'required',

        ]);
        if(Auth::Attempt($req->only('email','password'))){
            return redirect('/');
        }else{
         return back()->with('fail','User not found!');
        }

        
      
        // return redirect('/');
    }
    public function logout()
    {
        Auth()->logout();
        return redirect()->route('login');
    }
}