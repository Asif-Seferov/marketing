<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MainController;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'as' => 'admin.'], function(){
    Route::get('/', [MainController::class, 'index'])->name('index');
});
