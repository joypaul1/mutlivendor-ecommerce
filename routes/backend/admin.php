<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '/admin'], function (){
    Route::get('/','AdminController@index')->name('backend.admin.index');
    Route::get('/create','AdminController@create')->name('backend.admin.create');
    Route::post('/store','AdminController@store')->name('backend.admin.store');
    Route::get('/edit/{admin}','AdminController@edit')->name('backend.admin.edit');
    Route::get('/permission/{admin}','AdminController@permission')->name('backend.admin.permission');
    Route::post('/update/{id}','AdminController@update')->name('backend.admin.update');
    Route::get('/delete/{admin}','AdminController@destroy')->name('backend.admin.destroy');
    Route::post('/permission-store/{id}','AdminController@permissionStore')->name('backend.admin.permission.store');
    Route::post('/search','AdminController@search')->name('backend.admin.search');
});
