<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

use App\Http\Controllers\MessageController;
use App\Http\Controllers\LanguageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::post('lang/{lang}', [LanguageController::class, 'switchLang'])->name('lang.switch');

Route::get('/', function () {
    return view('landingpage');
});

Route::get('/Aboutus', function () {
    return view('aboutus');
});

Route::get('/Menu', function () {
    return view('menu');
});

Route::get('/Contactus', function () {
    return view('contactus');
});

Route::post('/submitForm', [MessageController::class, 'submitForm'])->name('submit.form');