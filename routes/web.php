<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/index', function () {
    return view('index');
});

Route::get('/', function () {
    return view('shop');
});

// Route::get('/', function () {
//     return view('shop');
// })->middleware(['auth'])->name('shop');

require __DIR__.'/auth.php';


Route::get('/detail', function () {
    return view('profile.detail');
});

Route::get('/ukuran', function () {
    return view('size.ukuran');
});

Route::get('/shop', function () {
    return view('profile.shop');
});