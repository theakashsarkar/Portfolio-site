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
Route::get('/',[
    'uses' => 'portfolio@index',
    'as'   => '/'

]);
Route::get('/about',[
    'uses' => 'portfolio@about',
    'as'   => 'about'
]);
Route::get('/service',[
    'uses' => 'portfolio@service',
    'as'   => 'service'
]);
Route::get('/contact',[
    'uses' => 'portfolio@contact',
    'as'   => 'contact'
]);
