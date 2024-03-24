<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AuthController;
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

Route::get('/Welcome', function () {
    return view('landingpage');
});

Route::get('/Aboutus', function () {
    return view('aboutus');
});

Route::get('/Contactus', function () {
    return view('contactus');
});


Route::get('/adminpage', function () {
    return view('adminpage');
});

Route::resource('items', ItemController::class);

Route::middleware(['authenticate'])->group(function () {
    Route::get('/adminpage', [ItemController::class, 'adminPage'])->name('adminpage');
    Route::delete('/items/{id}', [ItemController::class, 'destroy'])->name('item.destroy');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::get('/Menu', [MenuController::class, 'showMenuPage'])->name('menupage');


Route::get('/menupage/{category}', [MenuController::class, 'getItemsByCategory'])->name('menupage.category');


Route::get('/admin', [ItemController::class, 'index']);
Route::get('/menu', [ItemController::class, 'menu']);



Route::get('/login', [AuthController::class, 'loginpage'])->name('login.page');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::post('/submitForm', [MessageController::class, 'submitForm'])->name('submit.form');
