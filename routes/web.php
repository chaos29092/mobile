<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'HomeController@index');
Route::get('about','HomeController@about');
Route::get('contact','HomeController@contact');

Route::get('category/{category}','HomeController@category');
Route::get('product/{product}','HomeController@product');

Route::get('news','HomeController@news');
Route::get('new/{page}','HomeController@new');


Auth::routes();

Route::resource('/admin/products', 'ProductsController');
Route::resource('/admin/categories', 'CategoriesController');

//summer note pages images upload and delete
Route::post('admin/pages/images/{id}','PagesController@image_upload');
Route::delete('admin/pages/images','PagesController@image_delete');
Route::resource('/admin/pages','PagesController');

Route::get('home','ProductsController@index');

//summer note products images upload and delete
Route::post('admin/images/{id}','ProductsController@image_upload');
Route::delete('admin/images','ProductsController@image_delete');