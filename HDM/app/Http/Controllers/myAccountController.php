<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Product;

class myAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('myaccount');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //---DUMPS THE WHOLE HTTP REQUEST OBJECT---(GOKDAG)
        // echo '<pre>';
        // var_dump($request);
        // echo '</pre>';

        //---DUMPS THE SESSION INFO OF A USER---//(GOKDAG)
        // echo '<pre>';
        // var_dump(Request()->session());
        // echo '</pre>';

        //---FIRST CHECKS IF THE USER LOGGED IN---//(GOKDAG)
        // if (Auth::check())
        // {
        //     echo 'user logged in <br>';
        //     //---Displays the user name of the current session---//(GOKDAG)
        //     echo '<pre>';
        //     echo Auth::user()->name;
        //     echo '</pre>';

        // }
        // ---DUMPS THE WHOLE 'USER' STATIC INFO OF THE CURRENT SESSION---//(GOKDAG)
        // echo '<pre>';
        // var_dump(Auth::user());
        // echo '</pre>';

        // session(['product' => 'mytype of ring']);
        // echo '<pre>';
        // var_dump ($request->session());
        // echo '</pre>';

        // echo '<pre>';
        // echo $request;
        // echo '</pre>';

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $theUser=
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
