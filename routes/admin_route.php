<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;


Route::prefix('admin')->group(function(){
    Route::get('/',[DashboardController::class,'index']);

    Route::prefix('/categories')->group(function(){
        Route::get('/',[CategoriesController::class,'index'])->name('category.index');
        Route::get('/create',[CategoriesController::class,'create'])->name('category.create');
        Route::post('/store',[CategoriesController::class,'store'])->name('category.store');
        Route::get('/edit/{id}',[CategoriesController::class,'edit'])->name('category.edit');
        Route::post('/update/{id}',[CategoriesController::class,'update'])->name('category.update');
        Route::get('/delete/{id}',[CategoriesController::class,'destroy'])->name('category.delete');
    });
    Route::prefix('/countries')->group(function(){
        Route::get('/',[CountryController::class,'index'])->name('country.index');
        Route::get('/create',[CountryController::class,'create'])->name('country.create');
        Route::post('/store',[CountryController::class,'store'])->name('country.store');
        Route::get('/edit/{id}',[CountryController::class,'edit'])->name('country.edit');
        Route::post('/update/{id}',[CountryController::class,'update'])->name('country.update');
        Route::get('/delete/{id}',[CountryController::class,'destroy'])->name('country.delete');
    });


});
