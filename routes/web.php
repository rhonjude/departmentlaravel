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
Route::get('/mca', function () {
    return view('mca');
});
Route::get('/msc', function () {
    return view('msc');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/department', function () {
    return view('department');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/aboutus', function () {
    return view('aboutus');
});