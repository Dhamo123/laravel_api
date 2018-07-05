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

Route::get('/', 'Login@index');

Route::post('/', 'Login@post_login');
Route::get('/add_category', 'Category@post_category_data');
Route::post('/add_category', 'Category@add_category');
Route::get('/category/', 'Category@index');
Route::get('/category/{id}', 'Category@get_category');
Route::get('/del_category/{id}', 'Category@del_category');
Route::post('/category/{id}', 'Category@post_category_data');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
