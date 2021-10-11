<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '/submodule'], function (){
    Route::get('/','PermissionSubModuleController@index')->name('backend.submodule.index');
    Route::get('/create','PermissionSubModuleController@create')->name('backend.submodule.create');
    Route::post('/store','PermissionSubModuleController@store')->name('backend.submodule.store');
    Route::get('/edit/{submodule}','PermissionSubModuleController@edit')->name('backend.submodule.edit');
    Route::post('/update/{submodule}','PermissionSubModuleController@update')->name('backend.submodule.update');
    Route::get('/delete/{submodule}','PermissionSubModuleController@destroy')->name('backend.submodule.destroy');

});
