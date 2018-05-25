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

Route::get('/', 'SiteController@home');
Route::get('/contact', 'SiteController@contact');
Route::get('/news', 'SiteController@news');


// Role

Route::get('/role', 'App\RoleController@listGet');
Route::post('/role', 'App\RoleController@listPost');
Route::get('/role/item/{id?}', 'App\RoleController@itemGet');
Route::post('/role/item/{id?}', 'App\RoleController@itemPost');

Route::get('/status_project', 'App\Status_projectController@listGet');
Route::post('/status_project', 'App\Status_projectController@listPost');
Route::get('/status_project/item/{id?}', 'App\Status_projectController@itemGet');
Route::post('/status_project/item/{id?}', 'App\Status_projectController@itemPost');


Route::get('/app', 'App\AppHomeController@get');

Route::get('/more2', function() {
	return view('more2');
});