<?php

use Illuminate\Support\Facades\Route;


// sellers

Route::group(['prefix' => '/seller'], function () {
    Route::get('/', 'SellerController@index')->name('backend.seller.index');
    Route::get('/create', 'SellerController@create')->name('backend.seller.create');
    Route::post('/store', 'SellerController@store')->name('backend.seller.store');
    Route::get('/show/{id}', 'SellerController@show')->name('backend.seller.show');
    Route::get('/edit/{id}', 'SellerController@edit')->name('backend.seller.edit');
    Route::post('/update/{id}', 'SellerController@update')->name('backend.seller.update');
    Route::get('/delete/{seller}', 'SellerController@destroy')->name('backend.seller.destroy');
    //ajax  status
    Route::get('/status/{id}', 'SellerController@status')->name('backend.seller.status');

    // premium routes
    Route::get('/premium', 'SellerController@premium')->name('backend.seller.premium.index');
    Route::post('/update_premium', 'SellerController@update_premium')->name('backend.seller.premium.update');

    //seach
    Route::post('seach', 'SellerController@search')->name('admin.seller.search');
    //createProfile
    Route::post('createProfile', 'SellerController@createProfile')->name('backend.seller.createProfile');
});
