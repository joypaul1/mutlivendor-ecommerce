<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '/sms-config'], function () {
    Route::get('/', 'SMSConfigController@index')->name('backend.sms_config.get');
    Route::get('create/', 'SMSConfigController@create')->name('backend.sms_config.create');
    Route::post('store/', 'SMSConfigController@store')->name('backend.sms_config.store');
    Route::get('edit/{id}', 'SMSConfigController@edit')->name('backend.sms_config.edit');
    Route::post('update/{id}', 'SMSConfigController@update')->name('backend.sms_config.update');
    Route::get('destrory/{id}', 'SMSConfigController@destroy')->name('backend.sms_config.destroy');
    Route::get('status/{id}', 'SMSConfigController@status')->name('backend.sms_config.status');
});

Route::group(['prefix' => '/email-config'], function () {
    Route::get('/', 'EmailConfigController@index')->name('backend.email_config.get');
    Route::post('/', 'EmailConfigController@update')->name('backend.email_config.post');
});
