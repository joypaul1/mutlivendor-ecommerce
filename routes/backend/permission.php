<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '/permission'], function (){
    Route::get('/','PermissionController@index')->name('backend.permission.index');
    Route::get('/create','PermissionController@create')->name('backend.permission.create');
    Route::post('/store','PermissionController@store')->name('backend.permission.store');
    Route::get('/edit/{permission}','PermissionController@edit')->name('backend.permission.edit');
    Route::post('/update/{permission}','PermissionController@update')->name('backend.permission.update');
    Route::get('/delete/{permission}','PermissionController@destroy')->name('backend.permission.destroy');
});
