<?php

use MultiSafepayErrorWatch\MultiSafepayErrorWatch\Controllers\PaymentController;
use MultiSafepayErrorWatch\MultiSafepayErrorWatch\Controllers\NotificationController;
use MultiSafepayErrorWatch\MultiSafepayErrorWatch\Controllers\InstallController;
use MultiSafepayErrorWatch\MultiSafepayErrorWatch\Controllers\WebhookController;
use MultiSafepayErrorWatch\MultiSafepayErrorWatch\Controllers\RedirectController;
use MultiSafepayErrorWatch\MultiSafepayErrorWatch\Controllers\RefundController;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'error-watch',
    'as' => 'error-watch.',
    'middleware' => ['web']
], function () {

});
