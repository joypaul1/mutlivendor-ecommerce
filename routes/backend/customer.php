<?php

use Illuminate\Support\Facades\Route;

// Offer page
Route::group(['prefix' => '/customer'], function (){
    Route::get('/','CustomerController@index')->name('backend.customer.index');
    Route::get('/subscribe', 'CustomerController@subscribe')->name('backend.customer.subscribe');
    Route::get('/show/{user}','CustomerController@show')->name('backend.customer.show');
    Route::get('/edit/{user}','CustomerController@edit')->name('backend.customer.edit');
    Route::delete('/delete/{user}','CustomerController@destroy')->name('backend.customer.destroy');
    Route::get('/block/{id}','CustomerController@block')->name('backend.user.block');
    //seach
    Route::post('/seach','CustomerController@search')->name('admin.user.search');
    Route::post('/subscribesearch', 'CustomerController@subscribesearch')->name('admin.user.subscribe.search');


});

