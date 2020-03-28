<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/   
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', 'ArticleController@index');
Route::get('/admin/websites', 'AdminController@index');
Route::get('/admin/websites/{website}', 'AdminController@show');
Route::get('/admin/websites/{website}/articles', 'AdminController@articles');
Route::post('/admin/websites/{website}/scraper', 'AdminController@scraper');
Route::post('/admin/websites', 'AdminController@create');
Route::post('/admin/websites/{id}', 'AdminController@update');
Route::post('/admin/websites/delete/{id}', 'AdminController@destroy');

Route::get('/admin/categories', 'AdminCategoryController@index');
Route::post('/admin/categories', 'AdminCategoryController@create');
Route::get('/admin/categories/{category}', 'AdminCategoryController@show');
Route::post('/admin/categories/{id}', 'AdminCategoryController@update');
Route::post('/admin/categories/delete/{id}', 'AdminCategoryController@destroy');

Route::get('/admin/articles', 'AdminArticleController@index');
