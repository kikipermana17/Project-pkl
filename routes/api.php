<?php

namespace App\Http\Controllers;

use App\Http\Controllers\API\ApiBiroController;
use App\Http\Controllers\API\KategoriController;
use App\Http\Controllers\API\WisataController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('kategori2', [ApiController::class, 'kategori']);
// Route::post('kategori2', [ApiController::class, 'tambahKategori']);

Route::resource('biro', ApiBiroController::class);
Route::resource('kategori', KategoriController::class);
Route::resource('wisata', WisataController::class);
