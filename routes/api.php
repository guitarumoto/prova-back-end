<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\JogadoresController;
use App\http\Controllers\PartidasController;
use App\http\Controllers\TimesController;

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

Route::resource('/jogadores',JogadoresController::class);
Route::resource('/partidas',PartidasController::class);
Route::resource('/times',TimesController::class);
