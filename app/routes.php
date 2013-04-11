<?php

/* frontend */
Route::get('/', 'PageController@showIndex');
Route::get('/contact', 'PageController@showContact');
Route::get('/about', 'PageController@showAbout');

/* backend */
Route::get('/admin',            array('uses'=>'AdminController@showIndex'));
Route::get('/admin/dashboard',  array('uses'=>'AdminController@showDashboard',  'before'=>'auth'));
Route::get('/admin/users',      array('uses'=>'AdminController@showUsers',      'before'=>'auth'));
Route::get('/admin/user/{id}',  array('uses'=>'AdminController@showUser',       'before'=>'auth'));
Route::get('/admin/posts',      array('uses'=>'AdminController@showPosts',       'before'=>'auth'));
Route::get('/admin/post/{id}',  array('uses'=>'AdminController@showPost',       'before'=>'auth'));

/* api */
Route::get('/api',         array('uses'=>'ApiController@index'));
Route::post('/api/login',         array('uses'=>'ApiController@login'));
Route::get('/api/logout',         array('uses'=>'ApiController@logout'));
Route::post('/api/data',         array('uses'=>'ApiController@data'));