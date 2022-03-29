<?php

use App\Http\Controllers\PaymentController;

require_once  'vendor/autoload.php';

$controller = new PaymentController;

$controller->store();

