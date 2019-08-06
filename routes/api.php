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
Route::get('index', 'CustomerControllerAPI@index');
Route::post('create', 'CustomerControllerAPI@create');
Route::post('update/{id}', 'CustomerControllerAPI@update');
Route::delete('delete/{id}', 'CustomerControllerAPI@delete');
Route::get('detail/{id}', 'CustomerControllerAPI@detail');
