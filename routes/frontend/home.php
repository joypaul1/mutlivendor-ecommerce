<?php
use Illuminate\Support\Facades\Route;


// Not Authenticated
Route::group(['prefix' => '/', 'namespace' => 'Frontend',], function () {
    Route::get('/',               'HomeController@index')->name('home');
    Route::get('/single-porduct', 'HomeController@singleProduct')->name('singleProduct');
    Route::get('/all-porduct', 'HomeController@allProduct')->name('allProduct');
    Route::get('/cart', 'HomeController@cart')->name('cart');
    Route::get('/checkout', 'HomeController@checkout')->name('checkout');
    Route::get('/blog', 'HomeController@blog')->name('blog');
    Route::get('/my-account', 'HomeController@myAccount')->name('myAccount');
    Route::get('/contact', 'HomeController@contact')->name('contact');
    Route::get('/login', 'HomeController@login')->name('login');
    Route::get('/registation', 'HomeController@registation')->name('registation');
});

// Authenticated
Route::group(['prefix' => '/', 'middleware' => ['auth'], 'namespace' => 'Frontend'], function () {
    Route::get('/protected', 'HomeController@protected'); // test purpose
});
