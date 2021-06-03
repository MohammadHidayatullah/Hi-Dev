<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function(){
    return view('frontend/layouts/home');
});
Route::get('/dashboard', function(){
    return view('backend/layouts/dashboard');

Auth::routes();
});
Route::resource('webinar', WebinarController::class);
Route::resource('loker', LokerController::class);
