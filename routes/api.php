<?php

use Illuminate\Http\Request;
use App\Http\Controllers\WebsiteController;
Use App\Blog;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('website', 'WebsiteController');
Route::post('website/bbc', 'WebsiteController@bbc');
Route::post('website/tabula', 'WebsiteController@tabula');

Route::get('blogs', 'BlogController@index');
Route::get('blogs/{blog}', 'BlogController@show');
Route::post('blogs', 'BlogController@store');
Route::put('blogs/{blog}', 'BlogController@update');
Route::delete('blogs/{blog}', 'BlogController@delete');

Route::post('register', 'Auth\RegisterController@register');

// C:/laragon/bin/php/php-7.2.11-Win32-VC15-x64/php.exe