<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AuthController;

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

Route::get('/', function () {
    return view('landingpage');
});

Route::get('/menupage', function () {
    return view('menupage');
})->name('menupage');

Route::get('/adminpage', function () {
    return view('adminpage');
});

Route::resource('items', ItemController::class);

Route::middleware(['authenticate'])->group(function () {
    Route::get('/adminpage', [ItemController::class, 'adminPage'])->name('adminpage');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::get('/menupage', [MenuController::class, 'showMenuPage'])->name('menupage');

Route::get('/admin', [ItemController::class, 'index']);
Route::get('/menu', [ItemController::class, 'menu']);



Route::get('/login', [AuthController::class, 'loginpage'])->name('login.page');
Route::post('/login', [AuthController::class, 'login'])->name('login');
