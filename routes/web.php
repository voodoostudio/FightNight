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

Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
    Route::get('/', [
        'uses' => 'PagesController@index',
        'as' => 'index',
    ]);

    Auth::routes();

    Route::get('/admin', [
        'uses' => 'AdminController@index',
        'as' => 'admin',
    ]);

    /* CRUD POSTS */
    Route::resource('/admin/news', 'AdminController');
});


