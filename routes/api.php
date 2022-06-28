<?php

use App\Http\Controllers\API\DatabmController;
use App\Http\Controllers\SiswaController;
use App\Models\Siswa;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('databm', [DatabmController::class, 'index']);
Route::post('databm/store', [DatabmController::class, 'store']);


// Route::get('siswa', SiswaController::class, ['index']);
// Route::post('siswa', SiswaController::class, ['create']);

// Route::post('siswa', SiswaController::class, ['create']);
