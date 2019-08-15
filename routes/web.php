<?php

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

Route::get('/', 'Front\HomeController@index');

Route::get('/boss/login', 'Boss\LoginController@index');

Route::get('/game/life-game', function() {
	return view('lifegame');
});

Route::get('/game/ball', function() {
    return view('ball');
});

Route::get('/test/mb_strlen', 'StrController@mb_strlen');

Route::get('/game/life-game', 'GameController@lifeGame');
Route::get('/game/countdown', 'GameController@countdown');
Route::group(['namespace' => 'Js', 'prefix' => 'jstest'], function(){
	Route::get('concat', 'JsController@concat');
	Route::get('sortArray', 'JsController@sortArray');
	Route::get('vue', 'JsController@vue');
});