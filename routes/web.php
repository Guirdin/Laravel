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

Route::get('/', function () {
    return view('welcome');
});


Route::get('user/{id}', 'UserController@show');

Route::get('article', function () {
    return view('article.index');
});

// Route::get('article/{id}', function ($id) {
//     return 'Article '.$id;
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('users', 'UserController');
Route::resource('skills','SkillController');
// Route::resource('users.skill', 'SkillSetController');

// Route::get('users/{user}', 'UserController@show')->middleware('can:view')->name('users.show');
// Route::resource('users', 'UserController')->except(['show', 'index'])->middleware('can:manager');


