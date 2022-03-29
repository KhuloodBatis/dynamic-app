<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Exceptions\CardDeclined;
use App\Exceptions\PaymentException;

class PaymentController extends Controller
{
    public function store()
    {

        //var_dump('store');

        //     try{
        //         $this->makePayment();
        //     } catch(Exception $e){

        //         var_dump('failed');
        //     }
        // }

        // protected function handleCardDeclined(){

        // }

        // protected function makePayment(){

        //     throw new Exception();
        // }

        try {
            $this->makePayment();
        } catch (PaymentException $e) {

            // var_dump($e->getShortName());

            if (method_exists($this, $handler = 'handle' . $e->getShortName())) {

                $this->{$handler}($e);
            }

        //     $response = 'get' . $e->getShortName() .'Response';

        //     //var_dump($response);
        //     return response()->json('data'=>$this->{$response}()
        // );
        }
    }

    protected function getCardDeclinedResponse(PaymentException $e)
    {

        var_dump($e->getMessage());
    }
    // protected function handleCardDeclined(PaymentException $e)
    // {

    //     var_dump($e->getMessage());
    // }

    protected function makePayment()
    {

        throw new  CardDeclined('card was declined');
    }
}
