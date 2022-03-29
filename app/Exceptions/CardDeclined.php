<?php

namespace App\Exceptions;


use App\Exceptions\PaymentException;
use App\Exceptions\Traits\ExposesShortName;



class CardDeclined extends PaymentException{

   use ExposesShortName;

}
