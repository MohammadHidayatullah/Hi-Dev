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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/home', function(){
//     return view('frontend/layouts/home');
// })->name('home');

// Route::get('/addwebinar', function(){
//     return view('frontend/layouts/addwebinar');
// });

Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    Route::group(['namespace' => 'backend'], function () {
        Route::resource('dashboard', DashboardController::class);
    });
    Route::resource('webinar', WebinarController::class);
    Route::resource('loker', LokerController::class);
    Route::put('webinar/active/{webinar}','WebinarController@active')->name('webinar.active');
    Route::put('webinar/nonactive/{webinar}','WebinarController@nonactive')->name('webinar.nonactive');
    Route::put('loker/active/{loker}','LokerController@active')->name('loker.active');
    Route::put('loker/nonactive/{loker}','LokerController@nonactive')->name('loker.nonactive');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('addwebinar', AddWebinarController::class);

Route::group(['namespace' => 'frontend'], function () {
    Route::get('listwebinar', 'ListWebinarController@index');
    Route::get('detailwebinar/{id}', 'DetailWebinarController@index')->name('detailwb');
});

Route::group(['namespace' => 'frontend'], function () {
    Route::get('listloker', 'ListLokerController@index');
    Route::get('detailloker/{id}', 'DetailLokerController@index')->name('detaillk');
});





