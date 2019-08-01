<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // Home page
    public function home(){
        return view('welcome');
    }
    // Register
    public function register(){
        return view('register');
    }
    // Login
    public function login(){
        return view('login');
    }

}
