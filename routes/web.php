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

$pages = array('thank-you','register');
Route::get('/{page}',function($page) {
    return   view("pages.".$page);
})->where('page',implode('|',$pages));

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
