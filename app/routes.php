<?php

/* frontend */
Route::get('/',                 'PageController@index');
Route::get('/contact',          'PageController@contact');
Route::get('/about',            'PageController@about');

/* backend */
Route::get('/admin',                    array('uses'=>'AdminController@index'));
Route::get('/admin/dashboard',          array('uses'=>'AdminController@dashboard',  'before'=>'auth'));
Route::get('/admin/users',              array('uses'=>'AdminController@users',      'before'=>'auth'));
Route::get('/admin/users/{id}',         array('uses'=>'AdminController@user',       'before'=>'auth'));
Route::get('/admin/posts',              array('uses'=>'AdminController@posts',      'before'=>'auth'));
Route::get('/admin/posts/{id}',         array('uses'=>'AdminController@post',       'before'=>'auth'));

/* api */
Route::get('/api',              array('uses'=>'ApiController@index'));
Route::post('/api/login',       array('uses'=>'ApiController@login'));
Route::get('/api/logout',       array('uses'=>'ApiController@logout'));
Route::post('/api/data',        array('uses'=>'ApiController@data'));
Route::post('/api/flash',       array('uses'=>'ApiController@flash'));
