<?php

use Illuminate\Support\Facades\Route;
use MultiSafepayErrorWatch\MultiSafepayErrorWatch\Controllers\DashboardController;

Route::group([
    'prefix' => 'error-watch',
    'as' => 'error-watch.',
    'middleware' => ['web']
], function () {
    Route::get('/dashboard',[DashboardController::class,'getView'])->name('dashboard');
});
