<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Auth;
use illuminate\Support\Facades\Input;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/cart', function () {
    return view('cart');
});

//This route will call 'actionedit' function in MenuController to store ID in menu table and return menu details in 'cart' page
Route::get('/actionedit/{id}', [MenuController::class, 'actionedit']);

//This route will call 'want' function in OrderController to store quantity, calculate price and return details in 'paymentDetails' page
Route::post ('add/create',[OrderController::class, 'want']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

