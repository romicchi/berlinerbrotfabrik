<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use App;
use URL;

class LanguageController extends Controller
{
    public function switchLang(Request $request)
    {
        $lang = $request->input('lang');
        if (in_array($lang, config('app.languages'))) {
            Session::put('applocale', $lang);
        }
    
        return redirect()->back();
    }
}
