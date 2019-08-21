<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //---RETRIEVES "THE ADD BUTTON INFO" THROUGH SESSION AND STORES IT TO A VARIABLE---//(GOKDAG)
        $data = Request()->session()->get('cart[]');

        //---LOOPS THROUGH SESSION CART INFO (WHICH IS ONLY PRODUCT IDs...) FINDS THEM IN DB AND SENDS THEM TO THE VIEW---//(GOKDAG)
        $cartItems=array();
        //---If Statement checks if the data value is not empty if so proceeds accordingly (GOKDAG)
        // var_dump($data);
        if ($data !== null) {
            foreach ($data as $key => $value) {
                $cartItems [] = Product::find($value);
            }
            return view('cart', ['cart' => $cartItems]);
        }else{
            return view('cart', ['cart' => $cartItems]);
        }
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
        $item = ($request->removeFromCart);
        $data = $request->session()->get('cart[]');
        // // var_dump($item);
        // // if ($item !== null) {
        // //     Request()->session()->forget('cart[]'.$item );
        // //     return redirect('/cart');
        // // }
        // // $cartData = Request()->session()->get('cart[]');

        foreach ($data as $key => $value)
        {
            if ($value == $item)
            {
                unset($data [$key]);
            }
        }
        // put back in session array without deleted item
        $request->session()->push('cart[]',$data);
        $cartItems=array();
        // //then you can redirect or whatever you need
        var_dump($data);
        // return redirect('/cart');
        if ($data !== null) {
            foreach ($data as $key => $value) {
                $cartItems [] = Product::find($value);
            }
            return view('cart', ['cart' => $cartItems]);
        }else{
            return view('cart', ['cart' => $cartItems]);
        }
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
