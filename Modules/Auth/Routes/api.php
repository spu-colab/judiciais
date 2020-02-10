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


Route::middleware('jwt.auth')->group(function () {     
    Route::resource('usuario', 'AuthController');
    Route::resource('permissao', 'PermissaoController');
    Route::resource('divisaoOrganograma', 'DivisaoOrganogramaController');
    Route::get('divisaoOrganograma/listarPai', 'DivisaoOrganogramaController@listarPai');
    Route::get('usuario/reduzido', 'AuthController@listarReduzido');    
});