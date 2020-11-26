<?php

Route::group(
    [
        'namespace' => 'Edupham\Api\App\Http\Controllers',
        'prefix' => 'v2'
    ],
    function (){
        /* http://localhost:8000/api/v2/login */
        Route::post('login', 'UserController@login')->name('login');

        Route::group(['middleware' => 'auth.jwt'], function (){
            /* http://localhost:8000/api/v2/logout */
            Route::post('logout', 'UserController@logout')->name('logout');
        });

        Route::group(['prefix' => 'employees'], function (){
            //
        });



    }
);