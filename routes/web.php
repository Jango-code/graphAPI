<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\APIController;
use Dcblogdev\MsGraph\Models\MsGraphToken;
use App\Http\Middleware\MsGraphAuthenticated;

Route::redirect('/', 'login');
Route::get('login', APIController::class, 'login')->name('login');
Route::get('connect', APIController::class, 'connect')->name('connect');


Route::middleware([MsGraphAuthenticated::class])->group(function () {
    Route::get('app', PagesController::class, 'app')->name('app');
    Route::get('logout', APIController::class, 'logout')->name('logout');
});

Route::view('/test', 'test')->name('test');
