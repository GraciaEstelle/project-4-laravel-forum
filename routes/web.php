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
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/threads', 'ThreadController@index');
Route::post('/threads', 'ThreadsController@store');
Route::get('/threads/{thread}', 'ThreadController@show');
Route::post('/threads/{thread}/replies', 'RepliesController@store');
Route::get('/threads/create', 'ThreadsController@create');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
