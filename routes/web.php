<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\TransactionController;
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
// Routing Get
Route::get('/userdata', [UserController::class, 'index']);
Route::get('/productdata', [ProductController::class, 'index']);
Route::get('/report', [ReportController::class, 'index']);
Route::get('/transactiondata', [TransactionController::class, 'index']);
Route::get('/createtransaction', [TransactionController::class, 'create']);
Route::get('/createproduct', [ProductController::class, 'create']);
Route::get('/editproduct/{id}', [ProductController::class, 'edit']);
Route::get('/edittransaction/{id}', [TransactionController::class, 'edit']);


Route::get('/forecastinghw', function () {
    return view('pages.forecasthw');
});
Route::get('/login', function () {
    return view('auth.login');
});

//Routing Post
Route::post('/createproduct', [ProductController::class, 'store']);
Route::post('/createtransaction', [TransactionController::class, 'store']);

//Routing Patch
Route::patch('/editproduct/{id}', [ProductController::class, 'update']);
Route::patch('/edittransaction/{id}', [TransactionController::class, 'update']);

//Routing Delete
Route::delete('/deleteproduct/{id}', [ProductController::class, 'destroy']);
Route::delete('/deletetransaction/{id}', [TransactionController::class, 'destroy']);
