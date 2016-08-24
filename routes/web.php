<?php

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function() {

    Route::get('dashboard', 'DashboardController@index')->name('dashboard');

    Route::group(['prefix' => 'profile', 'as' => 'profile::'], function () {
        Route::get('', 'ProfileController@show')->name('show');
        Route::get('password', 'ProfileController@passwordShow')->name('password::show');
        Route::put('password', 'ProfileController@passwordUpdate')->name('password::update');
    });

});
