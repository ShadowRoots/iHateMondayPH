<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homepage(){
        return view('home.homepage');
    }

    public function shop(){
        return view('shop');
    }
    public function aboutus(){
        return view('aboutus');
    }

    public function contact(){
        return view('contact');
    }

    public function login(){
        return view('login');
    }
    public function logout(){
        session()->flush();
        return redirect('login');
    }

    public function signup(){
        return view('signup');
    }
}
