<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\UserController;
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
Route::get('/userdata', [UserController::class, 'index']);
Route::get('/productdata', [ProductController::class, 'index']);
Route::get('/report', [ReportController::class, 'index']);
Route::get('/forecastinghw', function () {
    return view('pages.forecasthw');
});
Route::get('/transactiondata', function () {
    return view('pages.transactiondata');
});
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/createproduct', function () {
    return view('pages.createproduct');
});
Route::get('/createtransaction', function () {
    return view('pages.createtransaction');
});
