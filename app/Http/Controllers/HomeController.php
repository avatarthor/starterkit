<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function landing()
    {
        addJavascriptFile('assets/js/custom/authentication/sign-in/general.js');

        return view('landing.landing');
    }
}
