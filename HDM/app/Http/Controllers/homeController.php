<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
<<<<<<< HEAD
=======


>>>>>>> 35994eaea5a446f8239de1e14d5035ba12237d44

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // if (Auth::check()) {
        //     echo 'user logged in';
        //     return view('home');
        // }
        echo '<pre>';
        var_dump(Auth::user());
        echo '</pre>';
    }
}
