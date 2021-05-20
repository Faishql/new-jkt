<?php

use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ZakatController;
use App\Http\Controllers\LimitController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use League\CommonMark\Block\Element\IndentedCode;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/loginnew', [AuthController::class, 'Login']);
Route::get('/register', [AuthController::class, 'viewLogin']);
Route::post('/register', [AuthController::class, 'Register']);

Route::prefix('/gabah')->group(function () {
    Route::get('/get', [ZakatController::class, 'getGabah']);
    Route::post('/add', [ZakatController::class, 'addGabah']);
    Route::get('/add', [ZakatController::class, 'viewAdd']);
    Route::post('/update', [ZakatController::class, 'updateGabah']);
    Route::get('/kering', [ZakatController::class, 'getGkering']);
    Route::get('/kering/data', [ZakatController::class, 'getGabahk']);
    Route::post('/kering', [ZakatController::class, 'addKering']);
    Route::post('/giling', [ZakatController::class, 'addGiling']);
    Route::post('/udetail', [ZakatController::class, 'uDetail']);
    Route::get('/giling', function () {
        return view("giling");
    });

    Route::get('/getGil', [ZakatController::class, 'getGil']);
});

Route::prefix('/detail')->group(function () {
    Route::get('/invoice/{id}', [ZakatController::class, 'getChart']);
    Route::post('/invoice', [ZakatController::class, 'addChart']);
});

Route::post('/filter', [LimitController::class, 'filterData']);

Route::get('/home', [HomeController::class, 'index']);
Route::get('/logout', [AuthController::class, 'Logout']);
Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/getSelect', [ZakatController::class, 'getSelect']);

Route::get('/cetak/{kode}', [ZakatController::class, 'updateGabah']);

/*
    ================================================================
                            Router Admin
    ================================================================
*/

Route::prefix('/admin')->group(function () {

    Route::get('/', [IndexController::class, 'index']);

    // Routing actions user
    Route::prefix('/user')->group(function () {
        Route::delete('/{id}', [IndexController::class, 'delUser'])->name('deluser');
        Route::post('/', [IndexController::class, 'addUser']);
        Route::put('/{id}', [IndexController::class, 'upUser']);
        Route::get('/{id}', [IndexController::class, 'getIdu']);
    });

    // Routing actions barang
    Route::prefix('/barang')->group(function () {
        Route::get('/', [IndexController::class, 'barang']);
        Route::get('/getup/{id}', [IndexController::class, 'getIdb']);
        Route::post('/', [IndexController::class, 'addBarang']);
        Route::put('/{id}', [IndexController::class, 'upBarang']);
        Route::delete('/{id}', [IndexController::class, 'delBarang']);
    });

    // Routing actions customer
    Route::prefix('/customer')->group(function () {
        Route::get('/', [IndexController::class, 'customer']);
        Route::get('/getup/{id}', [IndexController::class, 'getIdc']);
        Route::post('/', [IndexController::class, 'addCustomer']);
        Route::put('/{id}', [IndexController::class, 'upCustomer']);
        Route::delete('/{id}', [IndexController::class, 'delCustomer']);
    });
});
