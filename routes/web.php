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
// Static Pages
Route::get('/', 'StaticPagesController@index');
Route::post('/', 'StaticPagesController@customerStore');
Route::get('/menu','StaticPagesController@menu');
Route::get('/contact', 'StaticPagesController@contact');

// Admin Dashboard
Route::get('/admin', function () {
    return view('admin/dashboard');
});

// Admin Menu
Route::get('/admin/menu', 'MenusController@index');
Route::get('/admin/menu/create', 'MenusController@create');
Route::post('/admin/menu', 'MenusController@store');
Route::get('/admin/menu/{id}/edit', 'MenusController@edit');
Route::put('/admin/menu/{id}', 'MenusController@update');

// Admin Customer
Route::get('/admin/customer', 'CustomersController@index');

// Admin Staff
Route::get('/admin/staff', function () {
    return view('admin/staff');
});
Route::get('/admin/staff/create', function () {
    return view('admin/staff-create');
});
Route::get('/admin/staff/edit', function () {
    return view('admin/staff-edit');
});
