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

Route::get('', 'Controller@home');
Route::get('home', 'Controller@home');

Route::get('about_us', 'Controller@about_us');
Route::get('services', 'Controller@services');
Route::get('partners', 'Controller@partners');
Route::get('developments', 'Controller@developments');
Route::get('contact_us', 'Controller@contact_us');
Route::get('success', 'Controller@success');

Route::post('send-contact', 'Controller@sendContact')->name('send.contact');
