<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Belajar\MataPelajaranController;
use App\Http\Controllers\Belajar\RumusController;
use App\Http\Controllers\Belajar\TemplateRumus;
use App\Http\Controllers\PengaturanController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::group(['middleware' => 'user_previllage'], function () {
    
    Route::group(['prefix' => 'admin','namespace' => 'App\Http\Controllers\Admin' ,'as' => 'admin.'], function () {
        Route::get('rumus/bangun-ruang', 'DashboardController@ss')->name('dashboard');

        // route user
        Route::group(['prefix' => 'user', 'as' => 'user.'], function(){
            Route::controller('UserController')
                ->group(function() {
                // role
                Route::get('url', 'url')->name('url');
                Route::get('url/create', 'url_create')->name('url.create');
                Route::post('url', 'url_store')->name('url.store');
                Route::get('role/{id}', 'role')->name('role');
                Route::post('role/{id}', 'save_role')->name('simpan_role');
                // menu
                Route::get('menu', 'menu')->name('menu.index');
                Route::get('menu/create', 'menu_create')->name('menu.create');
                Route::post('menu', 'menu_store')->name('menu.store');
                Route::get('menu/{id}/edit', 'menu_edit')->name('menu.edit');
                Route::put('menu/{id}', 'menu_update')->name('menu.update');
                // user
                Route::get('previllage', 'previllage')->name('previllage.index');
                Route::get('previllage/create/{id}', 'previllage_create')->name('previllage.create');
                Route::post('previllage/create/{id}', 'previllage_store')->name('previllage.store');
                Route::get('previllage/user', 'user')->name('previllage.user.create');
                Route::post('previllage/user', 'user_create')->name('previllage.user.store');
                Route::delete('previllage/user/{id}', 'user_delete')->name('previllage.user.delete');
            });
            Route::resource('group', 'GroupController');
        });
    });

    Route::group(['as' => 'admin.'], function(){
        Route::resource('pengaturan', PengaturanController::class);
    });
    
    Route::group([], __DIR__.'/web/belajar/admin.php');
    Route::group([], __DIR__.'/user/soal.php');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');