<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//PUBLIC
Route::get('/home', function(){ return view('home'); });
Route::get('/', 'HomeController@index');
Route::get('/detail/{id}', 'HomeController@detail');
Route::get('/category/{id}', 'HomeController@category');


Route::middleware(['user'])->group(function () {
    Route::get('/profile', 'UserController@profile');
    Route::post('/profile/update/{id}', 'UserController@profile_update')->name('update');
    Route::get('/myblog', 'UserController@blog_list');
    Route::get('/myblog/delete/{id}', 'UserController@blog_delete');
    Route::get('/create', 'UserController@create');
    Route::post('/create', 'UserController@create_blog')->name('create');
});


Route::middleware(['admin'])->group(function () {
    Route::get('/user', 'AdminController@user');
    Route::get('/user/delete/{id}', 'AdminController@delete_user');
    Route::get('/blog', 'AdminController@all_blog');
    Route::get('/blog/delete/{id}', 'AdminController@delete_blog');
});

Auth::routes();



