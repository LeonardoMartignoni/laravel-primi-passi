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

Route::get('/', function () {
    $nav = [
        "Home",
        "About Us",
        "Contacts",
        "Shop"
    ];

    $welcome = "Hello World!";

    return view('home', compact('welcome', 'nav'));
})->name('home');

Route::get('/link/{index}', function ($index) {
    $nav = [
        "Home",
        "About Us",
        "Contacts",
        "Shop"
    ];

    $current_nav = $nav[$index];

    return view('link', compact('current_nav'));
})->name('nav-link');
