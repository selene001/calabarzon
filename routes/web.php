<?php

use Illuminate\Support\Facades\Route;

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
   return view('home');
});

/*
Route::get('/posts', function () {
    return view('posts');
});

Route::get('/gallery', function () {
    return view('gallery');
});


Route::get('/projects', function () {
    return view('projects');
});


Route::get('/about', function () {
    return view('about');
});


Route::get('/register', function () {
    return view('register');
});


Route::get('/login', function () {
    return view('login');
});

//Bootstrap route. INDEX
Route::get('/base', function () {
    return view('/layouts/common/index');
});

*/
