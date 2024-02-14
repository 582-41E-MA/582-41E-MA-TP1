<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciceController extends Controller
{
    //test template
    public function index(){
        return view('index');
    } 
    public function resume(){
        return view('resume');
    } 
    public function projects(){
        return view('projects');
    } 
    public function contact(){
        return view('contact');
    } 


    ///////////realshit
    public function list(){
        return view('list');
    } 
    public function show(){
        return view('show');
    } 
    public function pay(){
        return view('pay');
    } 

    // public function contactForm(Request $request){
    //     //return $request;
    //     return view('contact', ['data' => $request]);
    // }

    /**add to test stripe */
    public function stripePost(Request $request){
        //code copied from: https://docs.stripe.com/payments/checkout/how-checkout-works?ui=stripe-hosted
        $stripe = new \Stripe\StripeClient('sk_test_Hrs6SAopgFPF0bZXSN3f6ELN');

        $stripe->checkout->sessions->create([
            'line_items' => [
                [
                    'price' => '1',
                    'quantity' => 1, //this can be a parameter obtained from the url
                ],
            ],
            'mode' => 'subscription',
            'success_url' => 'pay/success',
            'cancel_url' => 'pay/cancel',
        ]);

    }
}
