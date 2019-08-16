<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
//use Illuminate\Support\Facades\Auth;
use Auth;
=======
use Illuminate\Support\Facades\Auth;
<<<<<<< HEAD
=======


>>>>>>> 35994eaea5a446f8239de1e14d5035ba12237d44
>>>>>>> 9813fd77cff9107bbd97ffb37bd933f1fa80c99b

class HomeController extends Controller
{
    protected $guard = 'admin';
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
    /*public function test(){
        $gg = Auth::guard('admin')->user()->id;
        var_dump($gg);
    }*/
}
