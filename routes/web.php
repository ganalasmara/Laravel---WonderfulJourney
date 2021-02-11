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

Route::get('/login', 'HomeController@trylogin');
Route::post('/login', 'HomeController@login')->name('logins');


Route::get('/', 'HomeController@index');
Route::get('/detail/{id}', 'HomeController@detail');
Route::get('/category/{id}', 'HomeController@category');
Route::get('/home', function(){
    return view('home');
});
Route::get('/user', 'HomeController@user');
Route::get('/user/delete/{id}', 'HomeController@delete_user');
Route::get('/blog', 'HomeController@blog');
Route::get('/blog/delete/{id}', 'HomeController@delete_blog');
Route::get('/profile', 'HomeController@profile');
Route::post('/profile/update/{id}', 'HomeController@profile_update')->name('update');
Route::get('/myblog', 'HomeController@myblog');
Route::get('/myblog/delete/{id}', 'HomeController@myblog_delete');
Route::get('/create', 'HomeController@create');
Route::post('/create', 'HomeController@create_blog')->name('create');

Auth::routes();



