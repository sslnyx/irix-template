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
        return view("pages." . $page);
    })->name($page);
}

Route::post('/registrants/new', 'RegistrantController@store')->name('newRegistrant');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// Route::get('/simlink', function () {
//     Artisan::call('storage:link');
// });

// Route::get('/clear-cache', function () {
//     Artisan::call('config:cache');
//     Artisan::call('cache:clear');
//     Artisan::call('config:clear');
//     return "Cache is cleared";
// });
