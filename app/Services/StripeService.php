<?php

namespace App\Services;


class StripeService
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


    public function createPaymentIntent()
    {
        $stripe = new \Stripe\StripeClient($this->stripeSecret);
        $paymentIntent = $stripe->paymentIntents->create([
            'amount' => 2000,
            'currency' => 'usd',
            'automatic_payment_methods' => ['enabled' => true],
        ]);
        return $paymentIntent->client_secret;
    }
}
