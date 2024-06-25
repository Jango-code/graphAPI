<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\APIController;


Route::redirect('/', 'login');

Route::group(['middleware' => ['web', 'guest']], function(){
    Route::get('login', APIController::class, 'login')->name('login');
    Route::get('connect', APIController::class, 'connect')->name('connect');
});

Route::group(['middleware' => ['web', 'MsGraphAuthenticated'], 'prefix' => 'app'], function(){
    Route::get('/', PagesController::class, 'app')->name('app');
    Route::get('logout', APIController::class, 'logout')->name('logout');
});
