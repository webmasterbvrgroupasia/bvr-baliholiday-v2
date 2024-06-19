<?php

use App\Http\Controllers\Guest\PropertyController;
use App\Http\Controllers\Guest\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::group(['as'=>'guest.'], function(){

    Route::get('/',[WelcomeController::class,'index'])->name('welcome.index');

    Route::get('/bali-villas-and-hotels',[PropertyController::class,'index'])->name('properties.index');

});
