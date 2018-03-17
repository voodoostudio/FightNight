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

    Route::get('/galleries', [
        'uses' => 'PagesController@galleries',
        'as' => 'galleries',
    ]);

    Route::get('/gallery/details/{id}', [
        'uses' => 'PagesController@gallery_details',
        'as' => 'gallery_details',
    ]);

   /* Route::get('/gallery', [
        'uses' => 'PagesController@gallery',
        'as' => 'gallery',
    ]);*/

    Route::get('/virtual_tour', [
        'uses' => 'PagesController@virtual_tour',
        'as' => 'virtual_tour',
    ]);

    Route::get('/results', [
        'uses' => 'PagesController@results',
        'as' => 'results',
    ]);

    Route::get('/partners', [
        'uses' => 'PagesController@partners',
        'as' => 'partners',
    ]);

    Route::get('/news', [
        'uses' => 'PagesController@news',
        'as' => 'news',
    ]);

    Route::get('/press', [
        'uses' => 'PagesController@press',
        'as' => 'press',
    ]);

    Route::get('/press/details/{id}', [
        'uses' => 'PagesController@pressDetails',
        'as' => 'press-details',
    ]);

    Route::get('/about', [
        'uses' => 'PagesController@about',
        'as' => 'about',
    ]);

    Route::get('/editions', [
        'uses' => 'PagesController@editions',
        'as' => 'editions',
    ]);

    Route::get('/tickets', [
        'uses' => 'PagesController@tickets',
        'as' => 'tickets',
    ]);

    Route::get('/contact', [
        'uses' => 'PagesController@contact',
        'as' => 'contact',
    ]);

    Route::get('/privacy_policy', [
        'uses' => 'PagesController@privacy_policy',
        'as' => 'privacy_policy',
    ]);

    Route::post('/contact', [
        'uses' => 'PagesController@postContact',
        'as' => 'post-contact',
    ]);

    Auth::routes();

    Route::get('/admin', [
        'uses' => 'AdminController@index',
        'as' => 'admin',
    ]);

    /* CRUD POSTS */
    Route::resource('/admin/news', 'AdminController');

    /* CRUD GALLERY */
    Route::resource('/admin/gallery', 'AdminGalleryController');
});


