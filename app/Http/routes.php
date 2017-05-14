<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('admin', 'Admin\AdminsController@statistics');

Route::post('admin/books', 'Admin\BooksController@store');

Route::get('admin/books/create', 'Admin\BooksController@create');

Route::get('admin/authors/index', 'Admin\AuthorsController@index');
Route::get('admin/authors/create', 'Admin\AuthorsController@create');
Route::post('admin/authors/store', 'Admin\AuthorsController@store');
Route::get('admin/authors/search', 'Admin\AuthorsController@search');

Route::get('admin/categories/create', 'Admin\CategoriesController@create');
Route::post('admin/categories/store', 'Admin\CategoriesController@store');
Route::get('admin/categories/search', 'Admin\CategoriesController@search');

Route::get('admin/publishers/create', 'Admin\PublishersController@create');
Route::post('admin/publishers/store', 'Admin\PublishersController@store');
Route::get('admin/publishers/search', 'Admin\PublishersController@search');

Route::get('admin/subjects/create', 'Admin\SubjectsController@create');
Route::post('admin/subjects/store', 'Admin\SubjectsController@store');
Route::get('admin/subjects/search', 'Admin\SubjectsController@search');

Route::get('/', 'MainController@index');
Route::get('/search', 'SearchesController@search');
