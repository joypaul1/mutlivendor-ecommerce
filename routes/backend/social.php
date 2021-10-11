<?php

use Illuminate\Support\Facades\Route;
	// social
Route::group(['prefix' => '/social'], function (){
    Route::get('/','SocialController@index')->name('backend.social.index');
    Route::post('/createupdate/{id?}','SocialController@createupdate')->name('backend.social.createupdate');
});
