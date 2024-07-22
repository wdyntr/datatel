<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\smaController;
use App\Http\Controllers\hotelController;
use App\Http\Controllers\univController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');

});

Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::controller(ProductController::class)->prefix('dataPelanggan')->group(function () {
        Route::get('', 'index')->name('dataPelanggan');
        Route::get('create', 'create')->name('dataPelanggan.create');
        Route::post('store', 'store')->name('dataPelanggan.store');
        Route::get('show/{id}', 'show')->name('dataPelanggan.show');
        Route::get('edit/{id}', 'edit')->name('dataPelanggan.edit');
        Route::put('edit/{id}', 'update')->name('dataPelanggan.update');
        Route::delete('destroy/{id}', 'destroy')->name('dataPelanggan.destroy');
    });

    Route::controller(smaController::class)->prefix('sma')->group(function () {
        Route::get('', 'index')->name('sma');
        Route::get('create', 'create')->name('sma.create');
        Route::post('store', 'store')->name('sma.store');
        Route::get('show/{id}', 'show')->name('sma.show');
        Route::get('edit/{id}', 'edit')->name('sma.edit');
        Route::put('edit/{id}', 'update')->name('sma.update');
        Route::delete('destroy/{id}', 'destroy')->name('sma.destroy');
    });

    Route::controller(hotelController::class)->prefix('hotel')->group(function () {
        Route::get('', 'index')->name('hotel');
        Route::get('create', 'create')->name('hotel.create');
        Route::post('store', 'store')->name('hotel.store');
        Route::get('show/{id}', 'show')->name('hotel.show');
        Route::get('edit/{id}', 'edit')->name('hotel.edit');
        Route::put('edit/{id}', 'update')->name('hotel.update');
        Route::delete('destroy/{id}', 'destroy')->name('hotel.destroy');
    });

    Route::controller(univController::class)->prefix('univ')->group(function () {
        Route::get('', 'index')->name('univ');
        Route::get('create', 'create')->name('univ.create');
        Route::post('store', 'store')->name('univ.store');
        Route::get('show/{id}', 'show')->name('univ.show');
        Route::get('edit/{id}', 'edit')->name('univ.edit');
        Route::put('edit/{id}', 'update')->name('univ.update');
        Route::delete('destroy/{id}', 'destroy')->name('univ.destroy');
    });


    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');

});