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

Route::group([
    'prefix' => Lalo::setLocale(),
    'middleware' => [
        'localeSessionRedirect',
        'localizationRedirect',
        'localeViewPath',
        'localize'
        ]
], function()
{   

    Auth::routes();

    Route::name('index')->get('/', 'PageController@index');

    Route::name('cookies')->get(Lalo::transRoute('routes.cookies'), 'PageController@cookies');
    
    Route::name('legacy')->get(Lalo::transRoute('routes.legacy'), 'PageController@legacy');

    Route::name('privacy')->get(Lalo::transRoute('routes.privacy'), 'PageController@privacy');

    Route::name('home')->get(Lalo::transRoute('routes.home'), 'HomeController@index');
    
    Route::name('template')->get(Lalo::transRoute('routes.template'), 'PageController@template');
    
    Route::get(Lalo::transRoute('routes.develop'), function()
    {
        // Use this route to print examples and quick tests
    })
    ->name('develop');

});

