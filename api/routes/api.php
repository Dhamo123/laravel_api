<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/category', 'Category@index');
Route::get('/category/{id}', 'Category@index');

Route::post('/category', 'Category@post_category');
Route::put('/category', 'Category@put_category');
Route::delete('/category', 'Category@delete_category');
