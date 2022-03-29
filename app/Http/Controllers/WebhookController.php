<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebhookController extends Controller
{
    public function handle(Request $request)
    {
        //dd('kool');
        //dd($request);

        // if ($request->type == 'card.declined') {
        //     $this->handleCardDeclined($request);
        // }
        // if ($request->type == 'subscription_canceled') {
        //     $this->handleSubscriptionCanceled($request);
        // }

        $method =str_replace('_','',ucwords($request->type, '_'));
         //var_dump($method);
         if(method_exists($this, $handler = 'handle'.$method)){
           $this->{$handler}($request);
         }

    }



    protected function handleCardDeclined($request)
    {

        var_dump('handle card declined.');
    }

    protected function handleSubscriptionCanceled($request)
    {

        var_dump('handle subscription declined.');
    }
}
