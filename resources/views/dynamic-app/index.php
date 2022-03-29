<?php

use App\Http\Controllers\WebhookController;

require_once  'vendor/autoload.php';

$request = (object)[

    'type' => 'subscription_declined',//'card_declined',
    'user' => 1
];

$controller = new App\Http\Controllers\WebhookController();

$controller->handle($request);





