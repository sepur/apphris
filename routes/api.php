<?php

use App\Http\Controllers\API\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ForgotPasswordController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::controller(AuthController::class)->group(function () {
    Route::post('/register', 'register');
    Route::post('/login', 'login');
    Route::apiResource('/cabang', App\Http\Controllers\API\CabangController::class);
    Route::apiResource('/apipt', App\Http\Controllers\API\ApiPerusahaanController::class);
    Route::apiResource('/apiloker', App\Http\Controllers\API\ApiLokerController::class);
    Route::post('password/email', [ForgotPasswordController::class, 'forgot']);
    Route::get('/verify/{id}/{notel}', [AuthController::class, 'verify']);
    Route::post('password/reset', [ForgotPasswordController::class, 'reset']);
    Route::get('/cekverify/{email}', [App\Http\Controllers\API\AuthController::class, 'cekverify'])->name('cekverify.cek_verify');
    Route::post('/resendemail', [App\Http\Controllers\API\AuthController::class, 'resentverif'])->name('resendemail.resentverif');
    Route::apiResource('/presensi', App\Http\Controllers\API\PresensiController::class);
    
    Route::middleware('auth:sanctum')->group(function () {
        Route::prefix('/profile')->group(function () {
            Route::get('/', 'profile');
	    Route::post('/', 'update');
        });
        Route::post('/logout', 'logout');
        Route::post('/changepass', [AuthController::class, 'changepass']);
        Route::post('/wish', [App\Http\Controllers\API\WishlistController::class, 'store']);
        Route::get('/wishlist', [App\Http\Controllers\API\WishlistController::class, 'wishlist']);	
        Route::apiResource('/provinsi', App\Http\Controllers\API\ProvinsiController::class);
        Route::apiResource('/kota', App\Http\Controllers\API\KotaController::class);
        Route::apiResource('/kecamatan', App\Http\Controllers\API\KecamatanController::class);
        Route::apiResource('/desa', App\Http\Controllers\API\DesaController::class);
        Route::apiResource('/pelamar', App\Http\Controllers\API\PelamarController::class);
        Route::post('/pelamar/updateprofile/{idlamar}', [App\Http\Controllers\API\PelamarController::class,'updateprofile'])->name('pelamar.updateprofile');
        Route::post('/apiloker/saveaplly/{id_loker}/{id_lamar}/{id_user}', [App\Http\Controllers\API\ApiLokerController::class,'saveaplly'])->name('apiloker.saveaplly');
        Route::get('/apiloker/showcab/{kocab}', [App\Http\Controllers\API\ApiLokerController::class,'showcab'])->name('apiloker.showcab');
        Route::apiResource('/status', App\Http\Controllers\API\StatusLamarController::class);
        Route::get('/status/apply/{sts}', [App\Http\Controllers\API\StatusLamarController::class,'detail'])->name('status.detail');
        Route::get('/status/detlistapply/{usr}/{lok}', [App\Http\Controllers\API\StatusLamarController::class,'detlistapply'])->name('status.detlistapply');
        Route::get('/getpresensi/{id}', [App\Http\Controllers\API\PresensiController::class, 'getpresensi']);
    });
});

