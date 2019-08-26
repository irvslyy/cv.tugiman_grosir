<?php


Route::get('/', 'UploaderController@indextwo');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'UploaderController@index')->name('adminpage');
Route::get('admin-login','Auth\AdminLoginController@showLoginForm');
Route::post('admin-login', ['as' => 'admin-login', 'uses' => 'Auth\AdminLoginController@login']);
Route::get('admin-register','Auth\AdminLoginController@showRegisterPage');
Route::post('admin-register', 'Auth\AdminLoginController@register')->name('admin.register');


Route::post('/adding', 'UploaderController@store')->name('upload_produk');
Route::delete('/products/{id}', 'UploaderController@destroy')->name('delete_produk');
Route::get('/products/{id}', 'UploaderController@show')->name('showit');

// Route::get('search', 'SearchController@index')->name('search');
Route::get('autocomplete', 'UploaderController@autocomplete')->name('autocomplete');