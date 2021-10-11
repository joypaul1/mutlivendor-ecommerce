<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '/module'], function (){
    Route::get('/','PermissionModuleController@index')->name('backend.module.index');
    Route::get('/create','PermissionModuleController@create')->name('backend.module.create');
    Route::post('/store','PermissionModuleController@store')->name('backend.module.store');
    Route::get('/edit/{module}','PermissionModuleController@edit')->name('backend.module.edit');
    Route::post('/update/{id}','PermissionModuleController@update')->name('backend.module.update');
    Route::get('/delete/{module}','PermissionModuleController@destroy')->name('backend.module.destroy');

});
