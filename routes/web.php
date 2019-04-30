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

//Auth
Route::get('/login', 'AuthController@loginForm')->name('login');
Route::post('/login', 'AuthController@login')->name('login');
Route::get('/register', 'AuthController@registerForm')->name('register');
Route::post('/register', 'AuthController@register')->name('register');
Route::get('/logout', 'AuthController@logout')->name('logout');

Route::resource('/courses', 'CourseController');

Route::get('/c', function () {
	return view('my.course.create');
});
Route::get('/s', function () {
	return view('courses.show');
});
Route::get('/i', function () {
	return view('my.course.index');
});

Route::get('/login', function () {
	return view('auth.login');
});
Route::get('/register', function () {
	return view('auth.register');
});

// Route::get('profile', 'UserController@profile');