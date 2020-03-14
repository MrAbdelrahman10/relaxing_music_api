<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    
    public function index()
    {
        return response_json(__('app.welcome'));
    }

}
