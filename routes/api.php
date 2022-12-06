<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/guru', [ProductController::class, 'getguru']); 
Route::post('/guru', [ProductController::class, 'getguru']);

Route::get('/siswa', [ProductController::class, 'getsiswa']); 
Route::post('/siswa', [ProductController::class, 'getsiswa']);

Route::get('/mengajar', [ProductController::class, 'getmengajar']); 
Route::post('/mengajar', [ProductController::class, 'getmengajar']);

Route::get('/kelas', [ProductController::class, 'getkelas']); 
Route::post('/kelas', [ProductController::class, 'getkelas']);

Route::get('/orangtua', [ProductController::class, 'getorangtua']); 
Route::post('/orangtua', [ProductController::class, 'getorangtua']);

Route::get('/mapel', [ProductController::class, 'getmapel']); 
Route::post('/mapel', [ProductController::class, 'getmapel']);