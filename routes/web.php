<?php

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

//主页路由
Route::get('/','StaticPagesController@home');
//帮助页路由
Route::get('/help','StaticPagesController@help');
//关于页路由
Route::get('/about','StaticPagesController@about');