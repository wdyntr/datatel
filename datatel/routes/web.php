<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\smaController;
use App\Http\Controllers\hotelController;
use App\Http\Controllers\univController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\faskesController;
use App\Http\Controllers\cafeController;
use App\Http\Controllers\wisata_lamselController;

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

    // routes/web.php
    Route::get('/search', [App\Http\Controllers\SearchController::class, 'index'])->name('search.index');


    Route::controller(ProductController::class)->prefix('datapelanggan')->group(function () {
        Route::get('', 'index')->name('datapelanggan');
        Route::get('create', 'create')->name('datapelanggan.create');
        Route::post('store', 'store')->name('datapelanggan.store');
        Route::get('show/{id}', 'show')->name('datapelanggan.show');
        Route::get('edit/{id}', 'edit')->name('datapelanggan.edit');
        Route::put('edit/{id}', 'update')->name('datapelanggan.update');
        Route::delete('destroy/{id}', 'destroy')->name('datapelanggan.destroy');
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

    Route::controller(BankController::class)->prefix('bank')->group(function () {
        Route::get('', 'index')->name('bank');
        Route::get('create', 'create')->name('bank.create');
        Route::post('store', 'store')->name('bank.store');
        Route::get('show/{id}', 'show')->name('bank.show');
        Route::get('edit/{id}', 'edit')->name('bank.edit');
        Route::put('edit/{id}', 'update')->name('bank.update');
        Route::delete('destroy/{id}', 'destroy')->name('bank.destroy');
    });

    Route::controller(faskesController::class)->prefix('faskes')->group(function () {
        Route::get('', 'index')->name('faskes');
        Route::get('create', 'create')->name('faskes.create');
        Route::post('store', 'store')->name('faskes.store');
        Route::get('show/{id}', 'show')->name('faskes.show');
        Route::get('edit/{id}', 'edit')->name('faskes.edit');
        Route::put('edit/{id}', 'update')->name('faskes.update');
        Route::delete('destroy/{id}', 'destroy')->name('faskes.destroy');
    });

    Route::controller(cafeController::class)->prefix('cafe')->group(function () {
        Route::get('', 'index')->name('cafe');
        Route::get('create', 'create')->name('cafe.create');
        Route::post('store', 'store')->name('cafe.store');
        Route::get('show/{id}', 'show')->name('cafe.show');
        Route::get('edit/{id}', 'edit')->name('cafe.edit');
        Route::put('edit/{id}', 'update')->name('cafe.update');
        Route::delete('destroy/{id}', 'destroy')->name('cafe.destroy');
    });

    Route::controller(wisata_lamselController::class)->prefix('wisata_lamsel')->group(function () {
        Route::get('', 'index')->name('wisata_lamsel');
        Route::get('create', 'create')->name('wisata_lamsel.create');
        Route::post('store', 'store')->name('wisata_lamsel.store');
        Route::get('show/{id}', 'show')->name('wisata_lamsel.show');
        Route::get('edit/{id}', 'edit')->name('wisata_lamsel.edit');
        Route::put('edit/{id}', 'update')->name('wisata_lamsel.update');
        Route::delete('destroy/{id}', 'destroy')->name('wisata_lamsel.destroy');
    });

    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');

});