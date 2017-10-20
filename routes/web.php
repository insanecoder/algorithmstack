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
    return view('home');
});

Route::get('/blog/admin/{userName}/{password}',['uses'=>'BlogController@getAdminPanel','as'=>'adminPanel']);

Route::post('/blog/saveBlog',['uses'=>'BlogController@saveBlog']);

Route::get('/getTags',['uses'=>'BlogController@getTagListFromQuery','as'=>'getTags']);

Route::get('/blog/{slug}/{blogID}',['uses'=>'BlogController@getBlogDescription','as'=>'blogDescription']);