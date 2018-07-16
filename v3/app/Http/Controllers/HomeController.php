<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
         // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('index');
    }
    public function faqs()
    {
        return view('faqs');
    }
    public function nosotros()
    {
        return view('nosotros');
    }
    public function register()
    {
        return view('/auth/register');
    }
    public function login()
    {
        return view('/auth/login');
    }

}
