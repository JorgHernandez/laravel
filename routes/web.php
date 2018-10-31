<?php
Route::get('/', 'PageController@index');
Route::get('/login', 'PageController@login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
