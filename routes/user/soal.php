<?php

use App\Http\Controllers\User\SoalController;
use Illuminate\Support\Facades\Route;


// Route::group(['middleware' => 'user_previllage'], function () {
    Route::group(['prefix' => 'belajar','as' => 'belajar.'], function () {
        Route::controller(SoalController::class)
        ->as('soal.')
        ->prefix('soal')
        ->group(function(){
            Route::get('/', 'index')->name('index');
        });
    });
// });
