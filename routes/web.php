<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'TopicsController@index')->name('index');

// 用户身份验证相关的路由
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// 相关路由
Route::resource('categories', 'CategoriesController', ['only' => ['show']]);
Route::resource('users', 'UsersController', ['only' => ['show', 'update', 'edit']]);
Route::resource('replies', 'RepliesController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);

// 话题相关路由
Route::post('upload_image', 'TopicsController@uploadImage')->name('topics.upload_image');
Route::resource('topics', 'TopicsController', ['only' => ['index', 'create', 'store', 'update', 'edit', 'destroy']]);
Route::get('topics/{topic}/{slug?}', 'TopicsController@show')->name('topics.show');
