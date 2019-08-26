<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
//use Stripe;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //TRYING TO SET TE STRIPE KEY TO LINK THE BUTTON
        //Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        //*---RETRIEVES "THE ADD BUTTON INFO" THROUGH SESSION AND STORES IT TO A VARIABLE---//(GOKDAG)
        $data = Request()->session()->get('basket');

        //*---LOOPS THROUGH SESSION CART INFO (WHICH IS ONLY PRODUCT IDs...) FINDS THEM IN DB AND SENDS THEM TO THE VIEW---//(GOKDAG)
        $cartItems = array();
        //*---If Statement checks if the data value is not empty if so proceeds accordingly (GOKDAG)
        //* var_dump($data);
        if ($data !== null) {
            foreach ($data as $key => $value) {
                $cartItems[] = Product::find($value);
            }
            return view('cart', ['cart' => $cartItems]);
        } else {
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
        $removedItemPrice = Product::select('price')->where('id', $item)->get();
        //Call the price here//
        $data = $request->session()->get('basket');

        foreach ($data as $key => $value) {
            if ($value == $item) {
                $request->session()->pull('basket.' . $key);
                break;
            }
        }

        $cartItems = array();
        $data = $request->session()->get('basket');

        if ($data !== null) {
            foreach ($data as $key => $value) {
                $cartItems[] = Product::find($value);
            }
            return view('cart', ['cart' => $cartItems])->with('itemPrice', $removedItemPrice);
        } else {
            return view('cart', ['cart' => $cartItems])->with('itemPrice', $removedItemPrice);
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
    public function ajaxCall(Request $request)
    {
        // $item = ($request->removeFromCart);
        // $data = $request->session()->get('basket');

        // foreach ($data as $key => $value)
        // {
        //     if ($value == $item)
        //     {
        //         $request->session()->pull('basket.'.$key);
        //         break;

        //     }
        // }

        // $cartItems=array();
        // $data = $request->session()->get('basket');

        // if ($data !== null) {
        //     foreach ($data as $key => $value) {
        //         $cartItems [] = Product::find($value);
        //     }
        //     return view('cart', ['cart' => $cartItems]);
        // }else{
        //     return view('cart', ['cart' => $cartItems]);
        // }
    }
}
