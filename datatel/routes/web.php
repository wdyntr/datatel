<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;

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

    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');

});