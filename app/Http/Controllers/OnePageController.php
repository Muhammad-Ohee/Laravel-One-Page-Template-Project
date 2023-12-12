<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OnePageController extends Controller
{
    function webpage()
    {
        return view('home');
    }
}
