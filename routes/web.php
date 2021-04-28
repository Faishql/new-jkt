<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ZakatController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::post('/loginnew', [AuthController::class, 'Login']);
Route::get('/register', [AuthController::class, 'viewLogin']);

Route::prefix('/gabah')->group(function() {
    Route::get('/get', [ZakatController::class, 'getGabah']);
    Route::post('/add', [ZakatController::class, 'addGabah']);
    Route::get('/add', [ZakatController::class, 'viewAdd']);
    Route::post('/update', [ZakatController::class, 'updateGabah']);
    Route::get('/kering', [ZakatController::class, 'getGkering']);
    Route::get('/kering/data', [ZakatController::class, 'getGabahk']);
});

Route::prefix('/detail')->group(function() {
    Route::get('/invoice/{id}', [ZakatController::class, 'getChart']);
    Route::post('/invoice', [ZakatController::class, 'addChart']);
});

Route::get('/home', [HomeController::class, 'index']);
Route::get('/logout', [AuthController::class, 'Logout']);

Route::get('/cetak/{kode}', [ZakatController::class, 'updateGabah']);