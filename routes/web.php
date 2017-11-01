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

Route::view('/', 'welcome');
Route::get('/prints/breakeven', 'BreakevenController@display');
Route::post('/prints', 'BreakevenController@calculate');

Route::get('/env', function () {
	dump(config('app.name'));
	dump(config('app.env'));
	dump(config('app.debug'));
	dump(config('app.url'));
});
