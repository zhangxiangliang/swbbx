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

// 用户身份验证相关的路由
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::group(['namespace' => 'Web'], function () {
    // 系统相关
    Route::get('/', 'ToolsController@index')->name('tools.index');
    Route::get('notifications', 'NotificationsController@index')->name('notifications.index');

    // 物品相关
    Route::get('items', 'ItemsController@index')->name('items.index');
    Route::get('barbecues', 'BarbecuesController@index')->name('barbecues.index');

    // 江湖恩仇录
    Route::get('npcs', 'NpcsController@index')->name('npcs.index');

    // 门派相关
    Route::get('maps', 'MapsController@index')->name('maps.index');
    Route::get('maps/{map}', 'MapsController@show')->name('maps.show');

    // 用户相关
    Route::resource('users', 'UsersController', ['only' => ['show', 'update', 'edit']]);

    // 服务器相关
    Route::get('servers', 'ServersController@index')->name('servers.index');

    // 科举相关
    Route::get('questions', 'QuestionsController@index')->name('questions.index');

    // 话题分类
    Route::get('categories/{category}', 'CategoriesController@show')->name('categories.show');

    // 话题相关路由
    Route::resource('replies', 'RepliesController', ['only' => ['store']]);
    Route::resource('topics', 'TopicsController', ['only' => ['index', 'create', 'store', 'update', 'edit']]);
    Route::get('topics/{topic}/{slug?}', 'TopicsController@show')->name('topics.show');
    Route::post('topics/upload_image', 'TopicsController@uploadImage')->name('topics.upload_image');
});
