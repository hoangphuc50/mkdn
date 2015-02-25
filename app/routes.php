<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', 'HomeController@displayIndexPage');

Route::controller('admin/users', 'ManageUserController');
Route::controller('admin/blogs', 'ManageBlogController');
Route::controller('admin/products', 'ManageProductController');
Route::controller('admin/categories', 'ManageCategoryController');
Route::controller('admin/producers', 'ManageProducerController');
Route::controller('admin/blocks', 'ManageBlockController');
Route::controller('admin/orders', 'ManageOrderController');

Route::controller('admin', 'AdminController');

//ADMIN ACCOUNT
Route::get('admin/account', 'HomeController@displayIndexPage');

