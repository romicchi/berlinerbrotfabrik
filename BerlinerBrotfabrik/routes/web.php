<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\MenuController;

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

Route::get('/adminpage', [ItemController::class, 'adminPage'])->name('adminpage');
Route::get('/menupage', [MenuController::class, 'showMenuPage'])->name('menupage');


Route::get('/menupage/{category}', [MenuController::class, 'getItemsByCategory'])->name('menupage.category');


Route::get('/admin', [ItemController::class, 'index']);
Route::get('/menu', [ItemController::class, 'menu']);

