<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '/site-config'], function () {
    Route::get('/info', 'SiteInfoController@index')->name('backend.site_config.info');
    Route::post('/info', 'SiteInfoController@update')->name('backend.site_config.info');
    Route::get('/keyword', 'SiteInfoController@keyword')->name('backend.site_config.keyword');
    Route::post('/keywordupdate', 'SiteInfoController@keywordupdate')->name('backend.site_config.keywordupdate');
});

// banner
Route::group(['prefix' => '/banner'], function (){
	 Route::get('/','BannerController@index')->name('backend.site_config.banner.index');
	 Route::get('/create','BannerController@create')->name('backend.site_config.banner.create');
	 Route::get('/edit/{id}','BannerController@edit')->name('backend.site_config.banner.edit');
    Route::post('/store','BannerController@stores')->name('backend.site_config.banner.store');
    Route::get('/delete/{banner}','BannerController@destroy')->name('backend.site_config.banner.destroy');
    Route::post('/update/{banner}','BannerController@update')->name('backend.site_config.banner.update');
    Route::get('/status/{banner}','BannerController@status')->name('backend.site_config.banner.status');
});

// slider
Route::group(['prefix' => '/slider'], function (){
    Route::get('/','SliderController@index')->name('backend.site_config.slider.index');
    Route::get('/create','SliderController@create')->name('backend.site_config.slider.create');
    Route::get('/edit/{id}','SliderController@edit')->name('backend.site_config.slider.edit');
    Route::post('/store','SliderController@store')->name('backend.site_config.slider.store');
    Route::get('/delete/{slider}','SliderController@destroy')->name('backend.site_config.slider.destroy');
    Route::post('/update/{slider}','SliderController@update')->name('backend.site_config.slider.update');
});


// quick page
Route::group(['prefix' => '/quick-page'], function (){
    Route::get('/','QuickPageController@index')->name('backend.site_config.quick.page.index');
    Route::get('/create','QuickPageController@create')->name('backend.site_config.quick.page.create');
    Route::get('/edit/{id}','QuickPageController@edit')->name('backend.site_config.quick.page.edit');
    Route::post('/store','QuickPageController@store')->name('backend.site_config.quick.page.store');
    Route::get('/delete/{id}','QuickPageController@destroy')->name('backend.site_config.quick.page.destroy');
    Route::post('/update/{quickPage}','QuickPageController@update')->name('backend.site_config.quick.page.update');

});

// privacy page
Route::group(['prefix' => '/privacy'], function (){
    Route::get('/','PrivacyController@index')->name('backend.site_config.privacy.index');
    Route::post('/store/{id?}','PrivacyController@store')->name('backend.site_config.privacy.store');
    Route::get('/create','PrivacyController@create')->name('backend.site_config.privacy.create');
    Route::get('/edit/{id}','PrivacyController@edit')->name('backend.site_config.privacy.edit');
    Route::get('/delete/{privacy}','PrivacyController@destroy')->name('backend.site_config.privacy.destroy');
    Route::post('/update/{privacy}','PrivacyController@update')->name('backend.site_config.privacy.update');

});








