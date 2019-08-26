<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use Session;

use Stripe;



class StripePaymentController extends Controller

{
    // public function __construct() {
    //     Stripe::setApiKey(env('STRIPE_KEY'));
    // }
    /**

     * success response method.

     *

     * @return \Illuminate\Http\Response

     */

    public function stripe()

    {

        return view('stripe');
    }



    /**

     * success response method.

     *

     * @return \Illuminate\Http\Response

     */

    public function stripePost(Request $request)

    {

        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        Stripe\Charge::create([

            "amount" => 100 * 100,

            "currency" => "eur",

            "source" => $request->stripeToken,

            "description" => "Test payment from Diamonds Team"

        ]);



        Session::flash('success', 'Payment successful!');



        return back();
    }
    /*public function __construct()
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));
    }*/
}
