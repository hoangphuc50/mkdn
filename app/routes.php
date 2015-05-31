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
Route::get('san-pham/{id}', 'ProductController@displayDetailProductPage');
Route::get('danh-muc/{id}', 'ProductController@displayCategoryProductPage');

Route::get('muc-tin/{id}', 'BlogController@displayCategoryBlogPage');
Route::get('tin/{id}', 'BlogController@displayDetailBlogPage');

Route::controller('admin/users', 'ManageUserController');
Route::controller('admin/blogs', 'ManageBlogController');
Route::controller('admin/products', 'ManageProductController');
Route::controller('admin/categories', 'ManageCategoryController');
Route::controller('admin/producers', 'ManageProducerController');
Route::controller('admin/blocks', 'ManageBlockController');
Route::controller('admin/orders', 'ManageOrderController');
Route::controller('admin/block_htmls', 'ManageBlockHtmlController');
Route::controller('admin/menu_kinhs', 'ManageMenuKinhController');

Route::controller('admin', 'AdminController');

//ADMIN ACCOUNT
Route::get('admin/account', 'HomeController@displayIndexPage');

