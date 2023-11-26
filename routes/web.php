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
Route::get('electric_cooperatives', 'Controller@electric_cooperatives');
Route::get('allied_organizations', 'Controller@allied_organizations');
Route::get('issuances', 'Controller@issuances');
Route::get('resource_center', 'Controller@resource_center');
Route::get('publications', 'Controller@publications');
Route::get('events', 'Controller@events');
Route::get('news_and_updates', 'Controller@news_and_updates');
