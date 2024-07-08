<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class,'welcome']);

Route::get('home',function(){
    echo "Hello Class in Laravel!";
});


Route::get('login',function(){
    return "Hello in login";
});


Route::prefix('products')->group(function(){
    Route::get('/',[ProductController::class,'index'])->name('products.index');

    Route::get('/{pid}/price/{koib}',[ProductController::class,'show'])->name('products.show');

    Route::get('/create',[ProductController::class,'create'])->name('products.create');

    Route::post('/store',[ProductController::class,'store'])->name('products.store');


});




