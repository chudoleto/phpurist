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


Route::get('/status_task', 'App\Status_taskController@listGet');
Route::post('/status_task', 'App\Status_taskController@listPost');
Route::get('/status_task/item/{id?}', 'App\Status_taskController@itemGet');
Route::post('/status_task/item/{id?}', 'App\Status_taskController@itemPost');

Route::get('/subdvision', 'App\SubdvisionController@listGet');
Route::post('/subdvision', 'App\SubdvisionController@listPost');
Route::get('/subdvision/item/{id?}', 'App\SubdvisionController@itemGet');
Route::post('/subdvision/item/{id?}', 'App\SubdvisionController@itemPost');

Route::get('/priority_task', 'App\Priority_taskController@listGet');
Route::post('/priority_task', 'App\Priority_taskController@listPost');
Route::get('/priority_task/item/{id?}', 'App\Priority_taskController@itemGet');
Route::post('/priority_task/item/{id?}', 'App\Priority_taskController@itemPost');

Route::get('/servise', 'App\ServiseController@listGet');
Route::post('/servise', 'App\ServiseController@listPost');
Route::get('/servise/item/{id?}', 'App\ServiseController@itemGet');
Route::post('/servise/item/{id?}', 'App\ServiseController@itemPost');

Route::get('/project', 'App\ProjectController@listGet');
Route::post('/project', 'App\ProjectController@listPost');
Route::get('/project/item/{id?}', 'App\ProjectController@itemGet');
Route::post('/project/item/{id?}', 'App\ProjectController@itemPost');

Route::get('/user', 'App\UserController@listGet');
Route::post('/user', 'App\UserController@listPost');
Route::get('/user/item/{id?}', 'App\UserController@itemGet');
Route::post('/user/item/{id?}', 'App\UserController@itemPost');

Route::get('/task', 'App\TaskController@listGet');
Route::post('/task', 'App\TaskController@listPost');
Route::get('/task/item/{id?}', 'App\TaskController@itemGet');
Route::post('/task/item/{id?}', 'App\TaskController@itemPost');

Route::get('/files', 'App\FilesController@listGet');
Route::post('/files', 'App\FilesController@listPost');
Route::get('/files/item/{id?}', 'App\FilesController@itemGet');
Route::post('/files/item/{id?}', 'App\FilesController@itemPost');

Route::get('/card', 'App\CardController@listGet');
Route::post('/card', 'App\CardController@listPost');
Route::get('/card/item/{id?}', 'App\CardController@itemGet');
Route::post('/card/item/{id?}', 'App\CardController@itemPost');


Route::get('/app', 'App\AppHomeController@get');

Route::get('/more2', function() {
	return view('more2');
});