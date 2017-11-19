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

Route::get('/', [
	'uses' => 'ReportController@index'
]);

Route::post('/', [
	'uses' => 'ReportController@create'
]);

Route::get('/{report_id}', [
	'uses' => 'ReportController@show'
]);

Route::get('/new/r', [
	'uses' => 'ReportController@new'
]);

Route::get('/{report_id}/edit', [
	'uses' => 'ReportController@edit'
]);


Route::post('/{report_id}/edit', [
	'uses' => 'ReportController@update'
]);

Route::get('/{report_id}/delete', [
	'uses' => 'ReportController@delete'
]);

