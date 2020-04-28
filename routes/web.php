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
    return view('welcome');
});
Route::get('/menu', function () {
    return view('main-pages/menu');
});
Route::get('/contact', function () {
    return view('main-pages/contact');
});
Route::get('/admin', function () {
    return view('admin/dashboard');
});
Route::get('/admin/menu', function () {
    return view('admin/menu');
});
Route::get('/admin/customer', function () {
    return view('admin/customer');
});
Route::get('/admin/staff', function () {
    return view('admin/staff');
});
