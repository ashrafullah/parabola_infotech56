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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// admin routes

Route::get('/admin/index', 'AdminController@index')->name('index');
Route::get('/admin/categorylist', 'AdminController@categorylist')->name('categorylist');
Route::get('/admin/add_category', 'AdminController@add_category')->name('add_category');
Route::get('/admin/users_list', 'AdminController@users_list')->name('users_list');

// frontend routes

Route::get('/frontend/index', 'FrontendController@frontend')->name('frontend_index');