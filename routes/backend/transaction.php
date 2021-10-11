<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'transactions'], function () {
    Route::get('/', 'TransactionController@index')->name('backend.transaction.index');
});

Route::group(['prefix' => 'withdrawals'], function () {
    Route::get('/create', 'WithdrawRequestController@create')->name('backend.withdrawal.create');
    Route::post('/store', 'WithdrawRequestController@store')->name('backend.withdrawal.store');
    Route::get('/edit/{id}', 'WithdrawRequestController@edit')->name('backend.withdrawal.edit');
    Route::post('/update/{id}', 'WithdrawRequestController@update')->name('backend.withdrawal.update');
    Route::delete('/{id}', 'WithdrawRequestController@destroy')->name('backend.withdrawal.destroy');
    Route::get('/', 'WithdrawRequestController@index')->name('backend.withdrawal.index');
});
