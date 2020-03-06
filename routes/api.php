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


Route::resource('website', 'WebsiteController');
Route::post('website/bbc', 'WebsiteController@bbc');
Route::post('website/tabula', 'WebsiteController@tabula');

Route::middleware('auth:api')->group(function() {
    Route::get('blogss', 'BlogController@index');
});
// Route::get('blogs', 'BlogController@index');
Route::get('blogs/{blog}', 'BlogController@show');
Route::post('blogs', 'BlogController@store');
Route::put('blogs/{blog}', 'BlogController@update');
Route::delete('blogs/{blog}', 'BlogController@delete');

Route::post('/register', 'AuthController@register');
Route::post('/login', 'AuthController@login');
Route::post('/logout', 'AuthController@logout');

// C:/laragon/bin/php/php-7.2.11-Win32-VC15-x64/php.exe
// C:\laragon\bin\php\php-7.2.11-Win32-VC15-x64
// C:\laragon\bin\composer
// owl123digitals