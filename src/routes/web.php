<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'error-watch',
    'as' => 'error-watch.',
    'middleware' => ['web']
], function () {

});
