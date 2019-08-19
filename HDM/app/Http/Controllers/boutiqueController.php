<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class boutiqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         //---CHECKS IF THE USER IS LOGGED IN IF SO RETURNS THE VIEW---//(GOKDAG)
        /*if (Auth::check()) {
            $products = Product::All();
            return view('collection', ['products' => $products]);
        }*/

        //---DISPLAYS THE BUTTON VALUE WHERE THE PRODUCT ID IS STORED---//(GOKDAG)
        // echo (Request()->addToCart);

        //---ERASES ALL MANUALLY STORED DATA FROM SESSION---//(GOKDAG)
        // session()->flush();

        //---WHEN THE ADD BUTTON IS CLICKED, IT SAVES THE PRODUCT ID INTO THE SESSION---//(GOKDAG)
        $itemToCart = (Request()->addToCart);
        if ($itemToCart ==! null) {
            Request()->session()->push('cart[]', $itemToCart );
            return redirect('/boutique');
        }

        $products = Product::All();
        return view('boutique', ['products' => $products]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
