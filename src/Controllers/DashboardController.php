<?php

namespace MultiSafepayErrorWatch\MultiSafepayErrorWatch\Controllers;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function getView(){
        return View('error-watch.dashboard');
    }

}
