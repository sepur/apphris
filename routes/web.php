<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

Route::get('/', function () {
    return view('welcome');
});
*/



Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
     * Home Routes
     */
    Route::get('/', 'HomeController@index')->name('home.index');
    Route::view('forgot_password', 'auth.reset_password')->name('password.reset');

    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');
        
    });



    Route::group(['middleware' => ['auth', 'permission']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');

	Route::resource('/posisijob', \App\Http\Controllers\PosisijobController::class);
	Route::get('/posisijob/edit/{id}',[ \App\Http\Controllers\PosisijobController::class,'edit'])->name('posisijob.edit');
	Route::post('/posisijob/storeedit/{id}',[ \App\Http\Controllers\PosisijobController::class,'storeedit'])->name('posisijob.storeedit');

        Route::resource('/loker', \App\Http\Controllers\LokerController::class);
        Route::post('/loker/saveaplly/{idloker}/{idlamar}/{id_user}', [\App\Http\Controllers\LokerController::class,'saveaplly'])->name('loker.saveaplly');
        Route::get('/loker/listapply/{id}', [\App\Http\Controllers\LokerController::class,'listapply'])->name('loker.listapply');
	Route::get('/loker/detail/{id}', [\App\Http\Controllers\LokerController::class,'detail'])->name('loker.detail');



        Route::resource('/cabang', \App\Http\Controllers\CabangController::class);
	Route::get('/cabang/detail/{id}', [\App\Http\Controllers\CabangController::class,'detail'])->name('cabang.detail');
	Route::post('/cabang/storeedit/{id}', [\App\Http\Controllers\CabangController::class,'storeedit'])->name('cabang.storeedit');
        Route::resource('/perusahaan', \App\Http\Controllers\PerusahaanController::class);
        Route::get('/perusahaan/edit/{id}', [\App\Http\Controllers\PerusahaanController::class, 'edit'])->name('perusahaan.edit');
        Route::post('/perusahaan/storeedit/{id}', [\App\Http\Controllers\PerusahaanController::class, 'storeedit'])->name('perusahaan.storeedit');


        Route::resource('/pelamar', \App\Http\Controllers\PelamarController::class);
        Route::get('/pelamar/detail/{id}', [\App\Http\Controllers\PelamarController::class,'detail'])->name('pelamar.detail');

        Route::resource('/verif', \App\Http\Controllers\VerifikasiController::class);
        Route::get('/verif/create/{id}', [\App\Http\Controllers\VerifikasiController::class,'create'])->name('verif.create');
        Route::get('/verif/createoffering/{id}', [\App\Http\Controllers\VerifikasiController::class,'createoffering'])->name('verif.createoffering');
        Route::get('/verif/createemploye/{id}', [\App\Http\Controllers\VerifikasiController::class,'createemploye'])->name('verif.createemploye');
        Route::post('/verif/store/{id}', [\App\Http\Controllers\VerifikasiController::class,'store'])->name('verif.store');
        Route::post('/verif/storeoffering/{id}', [\App\Http\Controllers\VerifikasiController::class,'storeoffering'])->name('verif.storeoffering');
        Route::post('/verif/storeemploye/{id}', [\App\Http\Controllers\VerifikasiController::class,'storeemploye'])->name('verif.storeemploye');
        Route::get('/employ/detail/{id}', [\App\Http\Controllers\EmployController::class,'detail'])->name('employ.detail');
        Route::get('/verif/cetakol/{id}', [\App\Http\Controllers\VerifikasiController::class,'cetakol'])->name('verif.cetakol');
        Route::post('/verif/storeapprove', [\App\Http\Controllers\VerifikasiController::class,'storeapprove'])->name('verif.storeapprove');
        Route::post('/verif/storereject', [\App\Http\Controllers\VerifikasiController::class,'storereject'])->name('verif.storereject');


        Route::get('/loker/edit/{id}', [\App\Http\Controllers\LokerController::class,'edit'])->name('loker.edit');
        Route::post('/loker/storeedit/{id}', [\App\Http\Controllers\LokerController::class,'storeedit'])->name('loker.storeedit');

        /**
         * User Routes
        i */
        Route::group(['prefix' => 'users'], function() {
            Route::get('/', 'UsersController@index')->name('users.index');
            Route::get('/create', 'UsersController@create')->name('users.create');
            Route::post('/create', 'UsersController@store')->name('users.store');
            Route::get('/{user}/show', 'UsersController@show')->name('users.show');
            Route::get('/{user}/edit', 'UsersController@edit')->name('users.edit');
            Route::patch('/{user}/update', 'UsersController@update')->name('users.update');
            Route::delete('/{user}/delete', 'UsersController@destroy')->name('users.destroy');
        });
        Route::resource('roles', RolesController::class);
        Route::resource('permissions', PermissionsController::class);    
        Route::resource('/employ', \App\Http\Controllers\EmployController::class);
	Route::resource('/announcement', \App\Http\Controllers\AnnouncementController::class);

	Route::controller(UserController::class)->group(function () {
            Route::get('eximp', 'eximp')->name('eximp');
            Route::get('export', 'export')->name('export');
            Route::post('import', 'import')->name('import');
        });

    });

});
Route::get('/berkas/create/{id}', [\App\Http\Controllers\BerkasLamaranController::class,'create'])->name('berkas.create');
Route::post('/berkas/store/{id}', [\App\Http\Controllers\BerkasLamaranController::class,'store'])->name('berkas.store');

