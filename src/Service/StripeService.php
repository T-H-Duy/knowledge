<?php

namespace App\Service;

use Stripe\Checkout\Session;
use Stripe\Stripe;

class StripeService
{
    private $stripeSecretKey;

    public function __construct(string $stripeSecretKey)
    {
        $this->stripeSecretKey= $stripeSecretKey;
    }

    public function createCheckoutSession(array $cartItems,string $successUrl, string $cancelUrl): Session
    {
        Stripe::setApiKey($this->stripeSecretKey);

        $lineItems = [];

        foreach($cartItems as $item){
            //Set the name of the course or lesson
            $name = $item->getCursus() ? $item ->getCursus()->getNameCursus() : $item ->getLesson()->getNameLesson();
            //Set the price of the course or lesson
            $price = $item->getCursus() ? $item ->getCursus()->getPrice() : $item ->getLesson()->getPrice();
            $quantity=1;

            $lineItems[] = [
                'price_data'=> [
                    'currency'=>'eur',
                    'product_data'=> [
                        'name'=> $name
                    ],
                    'unit_amount'=>$price*100,
                ],
                'quantity'=> $quantity,
                ];
        }

        return Session::create([
            'payment_method_types'=> ['card'],
            'line_items'=>$lineItems,
            'mode'=>'payment',
            'success_url'=>$successUrl,
            'cancel_url'=>$cancelUrl,
        ]);
       
    }
}