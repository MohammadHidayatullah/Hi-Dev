<?php

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
Route::group(['namespace' => 'Api'], function () {
    Route::get('webinar', 'WebinarAPIController@index')->name('WebinarAPI.index');
    Route::get('webinar/{id}', 'WebinarAPIController@show')->name('WebinarAPI.show');
    Route::get('loker', 'LokerAPIController@index')->name('LokerAPI.index');
    Route::get('loker/{id}', 'LokerAPIController@show')->name('LokerAPI.show');
});

