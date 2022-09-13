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


Route::get('/',
[
    'as' => 'home',
    'uses' => 'HomeController@index'
]);


Route::get('/actualite',
[
    'as' => 'actu',
    'uses' => 'BlogController@index'
]);

Route::get('/team',
[
    'as' => 'team',
    'uses' => 'PagesController@team'
]);


Route::get('/contact',
[
    'as' => 'contact',
    'uses' => 'PagesController@contact'
]);
