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


Route::get('products',[ProductController::class,'index']);


