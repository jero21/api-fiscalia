<?php

use Illuminate\Http\Request;

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
Route::group(['middleware' => ['jwt.auth']], function () {

	// ESPECIES
	Route::apiResource('especie', 'EspecieController');

	// ESPECIES DE TRIMESTRE NO VIGENTE
	Route::get('trimestreVigente', 'EspecieController@trimestreVigente');

	// CONFIGURACION
	Route::apiResource('configuracion', 'ConfiguracionController');
});

// LOGIN
Route::post('/login', 'AuthenticateController@authenticate');
