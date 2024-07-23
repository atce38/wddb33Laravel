<?php

use App\Http\Controllers\ProductController;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

include 'admin_route.php';

Route::get('/', [ProductController::class,'welcome']);

Route::get('home',function(){
    echo "Hello Class in Laravel!";
});


Route::get('login',function(){
    return "Hello in login";
});


Route::get('users',function(){

   return DB::table('users')->select('countries.name as country','users.*')
    ->join('countries','countries.id','=','users.country_id')
    ->get();
return User::select('countries.name as country','users.*')
->join('countries','countries.id','=','users.country_id')
->get();

});


Route::prefix('products')->group(function(){
    Route::get('/',[ProductController::class,'index'])->name('products.index')->middleware('auth');
    Route::get('/{pid}/price/{koib}',[ProductController::class,'show'])->name('products.show');
    Route::get('/create',[ProductController::class,'create'])->name('products.create');
    Route::post('/store',[ProductController::class,'store'])->name('products.store');


});





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
