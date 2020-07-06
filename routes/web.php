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

Route::get('/connexion',function(){
    return view('connexion');
});

Route::get('/inscription',function(){
    return view('inscription');
});

Route::get('/inscriptionAgent',function(){
    return view('inscriptionAgent');
});

Route::get('/locations/lieu',function(){
    return view('locations/lieu');
});

Route::get('/locations/type',function(){
    return view('locations/type');
});

Route::get('/locations/budget',function(){
    return view('locations/budget');
});

Route::get('/locations/proximiter',function(){
    return view('locations/proximiter');
});

Route::get('/locations/resume',function(){
    return view('locations/resume');
});

Route::get('/propriétaire/inscriptions/etape1',function(){
    return view('/propriétaire/inscriptions/etape1');
});
Route::get('/propriétaire/inscriptions/etape2',function(){
    return view('/propriétaire/inscriptions/etape2');
});
Route::get('/propriétaire/inscriptions/etape3',function(){
    return view('/propriétaire/inscriptions/etape3');
});
Route::get('/propriétaire/inscriptions/etape4',function(){
    return view('/propriétaire/inscriptions/etape4');
});


Route::get('/propriétaire/dashboard',function(){
    return view('/propriétaire/dashboard/dashboard');
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
