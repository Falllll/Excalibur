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
    return view('index');
});

Route::get('/user/register', function () {
    return view('login_user/register_user/register');
});

Route::get('/user/login', function () {
    return view('login_user/login');
});

Route::get('/admin', function () {
    return view('admin/dashboard');
});

Route::get('/developer', function () {
    return view('developer/dashboard');
});
