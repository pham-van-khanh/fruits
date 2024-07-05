<?php

use Illuminate\Support\Facades\Route;


Route::group(['as' => 'web.'], function () {
    Route::get('/', [\App\Http\Controllers\Web\HomeController::class,'index'])->name('index');
    Route::get('/shop', [\App\Http\Controllers\Web\ShopController::class,'index'])->name('shop');
});

//Admin
Route::group(['as' => 'admin.'], function () {
});
