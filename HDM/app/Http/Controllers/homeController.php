<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



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
        // return view('home');
        // session(['product' => 'mytype of ring']);

        echo '<pre>';
        var_dump(Request()->session());
        echo '</pre>';
        // session()->flush();

        /*ATTEnTION DANGEROUS*/
        // echo '<pre>';
        // var_dump(session());
        // echo '</pre>';


        // echo $value;
        // if (Auth::check()) {
        //     echo 'user logged in';
        //     return view('home');
        // }
        // echo '<pre>';
        // var_dump(Auth::user());
        // echo '</pre>';
    }
}
