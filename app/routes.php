<?php

/* frontend */
Route::get('/', 'PageController@showIndex');
Route::get('/contact', 'PageController@showContact');
Route::get('/about', 'pageController@showAbout');

/* backend */
Route::get('/admin',            array('uses'=>'adminController@showIndex'));
Route::get('/admin/dashboard',  array('uses'=>'adminController@showDashboard',  'before'=>'auth'));
Route::get('/admin/users',      array('uses'=>'adminController@showUsers',      'before'=>'auth'));
Route::get('/admin/user/{id}',  array('uses'=>'adminController@showUser',       'before'=>'auth'));

/* api */
Route::get('/api/login',         array('uses'=>'apiController@showLogin'));