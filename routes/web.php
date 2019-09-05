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

    Route::name('index')->get('/', '\Yasha\Backend\Http\Controllers\PageController@index');
    
    // Route::name('develop')
    // ->get(Lalo::transRoute('routes.develop'), function() {
    //     // Use this route to print examples and quick tests
    // });

    /** CATCH-ALL ROUTE for backend pages  **/
    Route::name('page')->get('{page}/{subs?}', ['uses' => '\Yasha\Backend\Http\Controllers\PageController@backend'])
    ->where(['page' => '^(((?=(?!admin))(?=(?!\/)).))*$', 'subs' => '.*']);

});

