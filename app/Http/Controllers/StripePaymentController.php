<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Stripe\{Charge, Stripe};

class StripePaymentController extends Controller {

    public function stripe() {
        return view('stripe.stripe');
    }

    public function stripePost(Request $request) {
        Stripe::setApiKey(env('stripe_secret'));
        Charge::create([
            "amount" => 100 * 100,
            "currency" => "usd",
            "source" => $request['stripeToken'],
            "description" => "test payment created."
        ]);

        Session::flash('success', 'Payment successful!');
        return back();
    }
}