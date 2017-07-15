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
Route::any('/register','RegisterController@register');
Route::any('/','RegisterController@register');
Route::any('/login','RegisterController@register');
Route::any('/logout','RegisterController@logout');
Route::any('/dashboard','DashboardController@dashboard');
//apis route are belows
Route::any('/api/v1/register','RegisterController@registerapi');
Route::any('/api/v1/login','RegisterController@loginapi');
Route::any('/api/v1/contact_fetch','DashboardController@contact_fetchapi');
Route::any('/api/v1/contact_fetch/{id}','DashboardController@contact_fetchapi');
Route::any('/api/v1/contact_save','DashboardController@contact_saveapi');
Route::any('/api/v1/contact_update/{id}','DashboardController@contact_updateapi');
Route::any('/api/v1/contact_delete/{id}','DashboardController@contact_deleteapi');

