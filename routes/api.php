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

// auth routes    
Route::post('register', 'AuthController@register');
Route::get('logout', 'AuthController@logout');
Route::get('auth/user', 'UserController@authUser');
Route::post('login', 'AuthController@login');

Route::apiResource('alimento', 'AlimentoController');
Route::apiResource('user', 'UserController')
    ->only('index', 'destroy', 'update', 'show');
    
Route::apiResource('dieta', 'DietaController');
Route::get('dieta/user/{user}', 'UserController@getDietas');
Route::get('dieta/{dietum}/alimento', 'DietaController@getAlimentos');
Route::get('pdf/{id}', 'DietaController@pdf');
