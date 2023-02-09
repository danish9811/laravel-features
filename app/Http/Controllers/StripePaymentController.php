<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Stripe\Charge;
use Stripe\Customer;
use Stripe\Stripe;

class StripePaymentController extends Controller {

    public function stripe() {
        return view('stripe.stripe');
    }

    public function stripePost(Request $request) {


        Stripe::setApiKey(env('STRIPE_SECRET'));
        $customer = Customer::create(array(
            "address" => [
                "line1" => "Near mall of Gujranwala, Kashmir Road, Gujranwala Punjab Pakistan",
                "postal_code" => "34021",
                "city" => ":Lahore",
                "state" => "AS",
                "country" => "PK",
            ],
            "email" => "demo@gmail.com",
            "name" => "Danish Mehmood",
            "source" => $request->stripeToken
        ));

        Charge::create([
            "amount" => 100 * 100,
            "currency" => "usd",
            "customer" => $customer->id,
            "description" => "Test payment from LaravelTus.com.",
            "shipping" => [
                "name" => "Jenny Rosen",
                "address" => [
                    "line1" => "510 Townsend St",
                    "postal_code" => "98140",
                    "city" => "San Francisco",
                    "state" => "CA",
                    "country" => "US",
                ],
            ]
        ]);
        Session::flash('success', 'Payment successful!');
        return back();
    }
}