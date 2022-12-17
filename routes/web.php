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
    return view('pages.dashboard');
});
Route::get('/userdata', function () {
    return view('pages.userdata');
});
Route::get('/productdata', function () {
    return view('pages.productdata');
});
Route::get('/forecastinghw', function () {
    return view('pages.forecasthw');
});
Route::get('/transactiondata', function () {
    return view('pages.transactiondata');
});
Route::get('/login', function () {
    return view('auth.login');
});


// Route::get('/', function () {
//     return view('welcome');
// });
