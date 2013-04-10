<?php

/* frontend */
Route::get('/', 'pageController@showIndex');
Route::get('/contact', 'pageController@showContact');
Route::get('/about', 'pageController@showAbout');

/* backend */
Route::get('/admin',            array('uses'=>'adminController@showIndex'));
Route::get('/admin/dashboard',  array('uses'=>'adminController@showDashboard',  'before'=>'auth'));
Route::get('/admin/users',      array('uses'=>'adminController@showUsers',      'before'=>'auth'));
Route::get('/admin/user/{id}',  array('uses'=>'adminController@showUser',       'before'=>'auth'));

/* api */
Route::get('/api',         array('uses'=>'apiController@index'));
Route::post('/api/auth',         array('uses'=>'apiController@auth'));