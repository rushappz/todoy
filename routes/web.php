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

// Route::get('/task/{tid}', function ($tid) {
//     return '<h3>This is the task ID: '.$tid.'</h3>';
// });

Route::get('/', 'PagesController@index');
Route::get('/dashboard', 'PagesController@dashboard');


Route::resource('tasks', 'TasksController');
