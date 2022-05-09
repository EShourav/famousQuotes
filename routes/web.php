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

Route::get('/', 'HomeController@index');
Route::get('/query', 'HomeController@search_quotes');



Route::get('/admin', 'AdminController@index');
Route::post('/admin_login', 'AdminController@login_check');
Route::get('/logout', 'AdminController@logout');


Route::get('/dashboard', 'QuotesController@show_quotes');
Route::get('/add_quotes', 'QuotesController@add_quotes');
Route::post('/save_quote', 'QuotesController@save_quotes');
Route::get('/edit_quotes/{q_id}', 'QuotesController@edit_quotes');
Route::post('/update_quote/{q_id}', 'QuotesController@update_quotes');
Route::get('/delete_quotes/{q_id}', 'QuotesController@delete_quotes');