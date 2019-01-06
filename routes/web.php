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
Route::get('/','Site\SiteController@index')->name('site');


Auth::routes();


//Rotas do usuário com nível Administrador
Route::group(['as'=>'admin.','prefix'=>'admin', 'namespace'=>'Admin','middleware'=>['auth','admin']], function(){
    Route::get('/','DashboardController@index')->name('dashboard');
    Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::get('settings','SettingsController@index')->name('settings');
    Route::put('profile-update','SettingsController@updateProfile')->name('profile.update');
});


//Rotas do usuário com nível Comapny, ou seja rotas destinadas as empresas
Route::group(['as'=>'company.','prefix'=>'company', 'namespace'=>'Company','middleware'=>['auth','company']], function(){
    Route::get('/','DashboardController@index')->name('dashboard');
    Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::get('settings','SettingsController@index')->name('settings');

});

//Rotas do usuário com nível Client, ou seja rotas destinadas aos uauários finais
Route::group(['as'=>'client.','prefix'=>'client', 'namespace'=>'Client','middleware'=>['auth','client']], function(){
    Route::get('/','DashboardController@index')->name('dashboard');
    Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::get('balance','BalanceController@index')->name('balance');
    Route::get('settings','SettingsController@index')->name('settings');
    Route::put('profile-update','SettingsController@updateProfile')->name('profile.update');
});