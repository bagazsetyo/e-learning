<?php

use App\Http\Controllers\Belajar\MataPelajaranController;
use App\Http\Controllers\Belajar\RumusController;
use App\Http\Controllers\Belajar\TemplateRumus;
use Illuminate\Support\Facades\Route;


// Route::group(['middleware' => 'user_previllage'], function () {
    Route::group(['prefix' => 'belajar','as' => 'belajar.'], function () {
        Route::resource('mapel', MataPelajaranController::class);
        Route::resource('rumus', RumusController::class);
        Route::get('rumus/script/{id}', [RumusController::class, 'script'])->name('rumus.script');
        Route::post('rumus/script/{id}', [RumusController::class, 'updatescript'])->name('rumus.updatescript');
        Route::get('rumus/catatan/{id}', [RumusController::class, 'catatan'])->name('rumus.catatan');
        Route::post('rumus/catatan/{id}', [RumusController::class, 'updatecatatan'])->name('rumus.updatecatatan');


        Route::controller(TemplateRumus::class)
        ->as('template.')
        ->prefix('template')
        ->group(function(){
            Route::get('/', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::put('update/{id}', 'update')->name('update');
            Route::delete('destroy/{id}', 'destroy')->name('destroy');
            Route::get('show/{id}', 'show')->name('show');
        });
    });
// });
