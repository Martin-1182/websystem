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

Route::get('/', 'PagesController@home');
Route::get('/cookies', 'PagesController@cookies');
Route::get('/ochrana-osobnych-udajov', 'PagesController@personal');
Route::post('/contact', 'ContactController@store')->name('contact.store');
Route::post('/newslatter', 'NewslatterController@store')->name('newslatter.store');
