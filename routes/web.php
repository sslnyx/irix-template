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
    return view('pages.home');
})->name("home");

$pages = array('thank-you', 'register');
foreach ($pages as $page) {
    Route::get($page, function () use ($page) {
        return view("pages.".$page);
    })->name($page);
}

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
