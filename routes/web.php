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


Route::get('/',function(){
    return view('welcome');
});

/* 
Route::get('/', function () {
    return redirect('/etape1');
});
 */
Route::get('/etape1', 'MenuController@createStep1')->name('signup');
Route::post('/etape1', 'MenuController@PostcreateStep1');
Route::get('/etape2', 'MenuController@createStep2');
Route::post('/etape2', 'MenuController@PostcreateStep2');
Route::get('/etape3', 'MenuController@createStep3');
Route::post('/etape3', 'MenuController@PostcreateStep3');
Route::post('/store', 'MenuController@store');
Route::post('/stor', 'MenuController@stor');
Route::get('/data', 'MenuController@index');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
