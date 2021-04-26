<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ZakatController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Route::post('/loginnew', [AuthController::class, 'Login']);
Route::get('/register', [AuthController::class, 'viewLogin']);

Route::prefix('/gabah')->group(function() {
    Route::get('/get', [ZakatController::class, 'getGabah']);
    Route::post('/add', [ZakatController::class, 'addGabah']);
    Route::put('/update', [ZakatController::class, 'updateGabah']);
});

Route::prefix('/detail')->group(function() {
    Route::get('/invoice/{id}', [ZakatController::class, 'getChart']);
    Route::post('/invoice', [ZakatController::class, 'addChart']);
});

Route::get('/home', [HomeController::class, 'index']);
