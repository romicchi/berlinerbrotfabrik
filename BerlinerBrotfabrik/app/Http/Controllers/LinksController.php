<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinksController extends Controller
{
    public function landingpage()
    {
        return view('landingpage');
    }

    public function aboutus()
    {
        return view('aboutus');
    }
}