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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'Backend\DashboardController@index')->name('index');
Route::get('/dashboard/file-manager', 'Backend\DashboardController@file_manager')->name('file-manager');
Route::get('/dashboard/language/{language}', 'Backend\DashboardController@language')->name('dashboard.language');
Route::get('/dashboard/profile/overview', 'Backend\DashboardController@profile_overview')->name('dashboard.profile.overview');
Route::get('/dashboard/logout', 'Backend\DashboardController@logout')->name('logout');
