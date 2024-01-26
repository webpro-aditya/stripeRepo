<?php

namespace App\Http\Controllers;

use App\Services\StripeService;
use Illuminate\Http\Request;

class StripeController extends Controller
{
    private $stripeMode;
    private $stripeKey;
    private $stripeSecret;

    public function __construct()
    {
        $this->stripeMode = config('constants.stripe.stripe_test_mode');
        $this->stripeKey = ($this->stripeMode) ? (config('constants.stripe.stripe_test_key')) : (config('constants.stripe.stripe_key'));
        $this->stripeSecret = ($this->stripeMode) ? (config('constants.stripe.stripe_test_secret')) : (config('constants.stripe.stripe_secret'));
    }


    public function cart()
    {
        return view('payment.cart');
    }


    public function checkout()
    {
        return view('payment.checkout');
    }


    public function config()
    {
        $response = [];
        $httpStatusCode = 200;
        $response['publishableKey'] = $this->stripeKey;
        return response()->json($response, $httpStatusCode);
    }


    public function createPaymentIntent(StripeService $stripe)
    {
        $response = [];
        $httpStatusCode = 200;
        $clientSecret = $stripe->createPaymentIntent();
        $response['clientSecret'] = $clientSecret;
        return response()->json($response, $httpStatusCode);
    }
}
