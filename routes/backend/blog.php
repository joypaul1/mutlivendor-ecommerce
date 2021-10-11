<?php

Use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '/blog'], function (){
	Route::get('/','BlogController@index')->name('backend.blog.index');
	Route::get('/create','BlogController@create')->name('backend.blog.create');
	Route::get('/edit/{blog}','BlogController@edit')->name('backend.blog.edit');
    Route::post('/store','BlogController@store')->name('backend.blog.store');
    Route::get('/delete/{blog}','BlogController@destroy')->name('backend.blog.destroy');
    Route::post('/update/{blog}','BlogController@update')->name('backend.blog.update');
    Route::post('/search','BlogController@search')->name('backend.blog.search');
});
