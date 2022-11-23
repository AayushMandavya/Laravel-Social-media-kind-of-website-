<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view("dashboard");
    }
    public function handleLogin(){
        return view("login");
    }
    public function handleSignup(){
        return view("register");
    }
    public function handleRegister(request $req)
    {
        $data= $req->all();
        dd($data);
    }   
}
