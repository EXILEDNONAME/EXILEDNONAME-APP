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

Route::get('/', function () { return view('welcome'); });
Route::get('/theme', function () { return view('layouts.default'); });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'Backend\DashboardController@index')->name('index');
Route::get('/dashboard/file-manager', 'Backend\DashboardController@file_manager')->name('file-manager');
Route::get('/dashboard/language/{language}', 'Backend\DashboardController@language')->name('dashboard.language');
Route::get('/dashboard/profile/overview', 'Backend\DashboardController@profile_overview')->name('dashboard.profile.overview');
Route::get('/dashboard/logout', 'Backend\DashboardController@logout')->name('logout');

// DUMMY - TABLE GENERALS
Route::group([
  'as' => 'system.table.generals.',
  'prefix' => 'dashboard/tables/generals',
  'namespace' => 'Backend\System\Table',
], function(){
  Route::get('active/{id}', 'GeneralController@active')->name('active');
  Route::get('inactive/{id}', 'GeneralController@inactive')->name('inactive');
  Route::get('restore/{id}', 'GeneralController@restore')->name('restore');
  Route::get('restoreall', 'GeneralController@restoreall')->name('restore-all');
  Route::get('delete-permanent/{id}', 'GeneralController@delete_permanent')->name('delete-permanent');
  Route::get('delete-permanentall', 'GeneralController@delete_permanentall')->name('delete-permanentall');
  Route::get('delete/{id}', 'GeneralController@delete')->name('delete');
  Route::get('deleteall', 'GeneralController@deleteall')->name('delete-all');
  Route::get('history', 'GeneralController@history')->name('history');
  Route::get('trash', 'GeneralController@trash')->name('trash');
  Route::resource('/', 'GeneralController')->parameters(['' => 'id']);
});
