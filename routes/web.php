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

Route::get('/admin/index', 'AdminController@index')->name('admin');
// add categorylist

// Route::get('/admin/categorylist', 'AdminController@categorylist')->name('categorylist');

Route::get('/admin/add_slider', 'AdminController@add_slider')->name('add_slider');
Route::post('/admin/add_slider', 'AdminController@upload')->name('upload');
Route::delete('/admin/add_slider/{id}', 'AdminController@destroy');
// Business phpto
Route::get('/admin/business', 'BusinessController@show')->name('business');
Route::post('/admin/business', 'BusinessController@upload')->name('business_upload');
Route::delete('/admin/business/{id}', 'BusinessController@destroy');
// user list

Route::get('/admin/users_list', 'AdminController@users_list')->name('users_list');



// frontend routes

Route::get('/frontend/index', 'FrontendController@frontend')->name('frontend_index');
Route::get('/frontend/building', 'FrontendController@building')->name('frontend_building');
Route::get('/frontend/it', 'FrontendController@it')->name('frontend_it');