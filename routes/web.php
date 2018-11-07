<?php
Route::get('/', 'PageController@index');
Route::get('/login', 'PageController@login');
Route::get('/productos', 'PageController@productos');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
