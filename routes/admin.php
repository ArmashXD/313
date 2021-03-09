<?php

use App\Http\Controllers\Admin\TokenController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin','middleware' => 'admin'],function (){
    Route::get('',[\App\Http\Controllers\Admin\AdminController::class,'index'])->name('admin.index');
    Route::Resources([
        'users' => \App\Http\Controllers\Admin\UserController::class,
        'tokens' => \App\Http\Controllers\Admin\TokenController::class,
        'levels' => \App\Http\Controllers\Admin\LevelController::class,
        'wheelhouses' => \App\Http\Controllers\Admin\WheelhouseController::class,
        'tickets' => \App\Http\Controllers\Admin\TicketController::class,
        'commissions' => \App\Http\Controllers\Admin\CommissionController::class,
        'contacts' => \App\Http\Controllers\Admin\ContactController::class,
        ]);
    Route::put('users/password', ['as' => 'users.password', 'uses' => 'App\Http\Controllers\Admin\UserController@password']);
    Route::post('change-license',[UserController::class,'licenseChange'])->name('change-license');
    Route::post('change-token',[TokenController::class,'tokenChange'])->name('change-token');

});
