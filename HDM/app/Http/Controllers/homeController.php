<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    //! protected $guard = 'admin'; DO NOT ERASE PLEASE JUST TEST (FABRIZIO :) )
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
        //---ADDS A NEW KEY-VALUE PAIR TO THE CURRENT SESSION---//(GOKDAG)
        // session(['product' => 'mytype of ring']);

        //---DUMPS THE CURRENT SESSION INFO--//(GOKDAG)
        // echo '<pre>';
        // var_dump(Request()->session());
        // echo '</pre>';

        //---RESETS THE CURRENT SESSION--//(GOKDAG)
        // session()->flush();

        //---LOGS OUT THE USER---//(GOKDAG)
        // Auth::logout();

        //---ATTENTION!!! DUMPS ALL THE SESSION INFO AND ENTERS INTO INFINITE LOOP--//(GOKDAG)
        // echo '<pre>';
        // var_dump(session());
        // echo '</pre>';

        //---CHECKS IF AN AUTHENTICATED USER IS LOGGED AND DISPLAYS MESSAGE---//(GOKDAG)
        // if (Auth::check()) {
        //     echo 'user logged in';
        //     return view('home');
        // }

        //---DUMPS THE CURRENT USER INFO---//(GOKDAG)
        // echo '<pre>';
        // var_dump(Auth::user());
        // echo '</pre>';
        return view('home');
    }

    //---TAKES THE GUARDED PROPERTY OF AUTH AND DUMPS THE USER ID---//(FABRIZIO)
    /*public function test(){
        $gg = Auth::guard('admin')->user()->id;
        var_dump($gg);
    }*/
    public function doLogout()
    {
        Auth::logout(); // log the user out of our application
        return redirect('/login'); // redirect the user to the login screen
    }
}
