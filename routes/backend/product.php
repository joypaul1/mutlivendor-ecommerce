<?php

use Illuminate\Support\Facades\Route;

// Categories
Route::group(['prefix' => 'categories'], function () {
    Route::get('/', 'CategoryController@index')
        ->name('backend.product.categories.index');
    Route::get('/create', 'CategoryController@create')
        ->name('backend.product.categories.create');
    Route::get('/edit/{category}', 'CategoryController@edit')
        ->name('backend.product.categories.edit');

    // non view
    Route::get('/destroy/{category}', 'CategoryController@destroy')
        ->name('backend.product.categories.destroy');
    Route::post('/store', 'CategoryController@store')
        ->name('backend.product.categories.store');
    Route::post('/update/{category}', 'CategoryController@update')
        ->name('backend.product.categories.update');
    Route::post('/search', 'CategoryController@search')
        ->name('backend.product.categories.search');

});

// SubCategories
Route::group(['prefix' => 'sub-categories'], function () {
    Route::get('/', 'SubCategoryController@index')
        ->name('backend.product.sub_categories.index');
    Route::get('/create', 'SubCategoryController@create')
        ->name('backend.product.sub_categories.create');
    Route::get('/edit/{subCategory}', 'SubCategoryController@edit')
        ->name('backend.product.sub_categories.edit');

    // non view
    Route::get('/destroy/{subCategory}', 'SubCategoryController@destroy')
        ->name('backend.product.sub_categories.destroy');
    Route::post('/store', 'SubCategoryController@store')
        ->name('backend.product.sub_categories.store');
    Route::post('/update/{subCategory}', 'SubCategoryController@update')
        ->name('backend.product.sub_categories.update');
    Route::post('/search', 'SubCategoryController@search')
        ->name('backend.product.sub_categories.search');


    // ajax
    Route::get('/ajax/list/{category_id}', 'SubCategoryController@ajaxGetSubCategories')
        ->name('backend.product.sub_categories.ajax.list');
});

//childCategories
Route::group(['prefix' => 'child-categories'], function () {

    Route::get('/', 'ChildCategoryController@index')
        ->name('backend.product.child_categories.index');
    Route::get('/create', 'ChildCategoryController@create')
        ->name('backend.product.child_categories.create');
    Route::get('/edit/{childCategory}', 'ChildCategoryController@edit')
        ->name('backend.product.child_categories.edit');

    // non view
    Route::get('/destroy/{childCategory}', 'ChildCategoryController@destroy')
        ->name('backend.product.child_categories.destroy');
    Route::post('/store', 'ChildCategoryController@store')
        ->name('backend.product.child_categories.store');
    Route::post('/update/{childCategory}', 'ChildCategoryController@update')
        ->name('backend.product.child_categories.update');
    Route::post('/search', 'ChildCategoryController@search')
        ->name('backend.product.child_categories.search');

    // ajax
    Route::get('/ajax/list/{subcategory_id}', 'ChildCategoryController@ajaxGetChildCategories')
        ->name('backend.product.child_categories.ajax.list');
});

// Origins
Route::group(['prefix' => 'origins'], function () {
    Route::get('/', 'OriginController@index')
        ->name('backend.product.origins.index');
    Route::get('/create', 'OriginController@create')
        ->name('backend.product.origins.create');
    Route::get('/edit/{origin}', 'OriginController@edit')
        ->name('backend.product.origins.edit');

    // non view
    Route::get('/destroy/{origin}', 'OriginController@destroy')
        ->name('backend.product.origins.destroy');
    Route::post('/store', 'OriginController@store')
        ->name('backend.product.origins.store');
    Route::post('/update/{origin}', 'OriginController@update')
        ->name('backend.product.origins.update');
});

// Brands
Route::group(['prefix' => 'brands'], function () {
    Route::get('/', 'BrandController@index')
        ->name('backend.product.brands.index');
    Route::get('/create', 'BrandController@create')
        ->name('backend.product.brands.create');
    Route::get('/edit/{brand}', 'BrandController@edit')
        ->name('backend.product.brands.edit');

    // non view
    Route::get('/destroy/{brand}', 'BrandController@destroy')
        ->name('backend.product.brands.destroy');
    Route::post('/store', 'BrandController@store')
        ->name('backend.product.brands.store');
    Route::post('/update/{brand}', 'BrandController@update')
        ->name('backend.product.brands.update');
    Route::post('/search', 'BrandController@search')
        ->name('backend.product.brands.search');

});


// Color
Route::group(['prefix' => 'colors'], function () {
    Route::get('/', 'ColorController@index')
        ->name('backend.product.colors.index');
    Route::get('/create', 'ColorController@create')
        ->name('backend.product.colors.create');
    Route::get('/edit/{color}', 'ColorController@edit')
        ->name('backend.product.colors.edit');

    // non view
    Route::get('/destroy/{color}', 'ColorController@destroy')
        ->name('backend.product.colors.destroy');
    Route::post('/store', 'ColorController@store')
        ->name('backend.product.colors.store');
    Route::post('/update/{color}', 'ColorController@update')
        ->name('backend.product.colors.update');
    Route::post('/search', 'ColorController@search')
        ->name('backend.product.colors.search');

});


// size
Route::group(['prefix' => 'sizes'], function () {
    Route::get('/', 'SizeController@index')
        ->name('backend.product.sizes.index');
    Route::get('/create', 'SizeController@create')
        ->name('backend.product.sizes.create');
    Route::get('/edit/{size}', 'SizeController@edit')
        ->name('backend.product.sizes.edit');

    // non view
    Route::get('/destroy/{size}', 'SizeController@destroy')
        ->name('backend.product.sizes.destroy');
    Route::post('/store', 'SizeController@store')
        ->name('backend.product.sizes.store');
    Route::post('/update/{size}', 'SizeController@update')
        ->name('backend.product.sizes.update');
     Route::post('/search', 'SizeController@search')
        ->name('backend.product.sizes.search');

});


// Units
Route::group(['prefix' => 'units'], function () {
    Route::get('/', 'UnitController@index')
        ->name('backend.product.units.index');
    Route::get('/create', 'UnitController@create')
        ->name('backend.product.units.create');
    Route::get('/edit/{unit}', 'UnitController@edit')
        ->name('backend.product.units.edit');

    // non view
    Route::get('/destroy/{id}', 'UnitController@destroy')
        ->name('backend.product.units.destroy');
    Route::post('/store', 'UnitController@store')
        ->name('backend.product.units.store');
    Route::post('/update/{unit}', 'UnitController@update')
        ->name('backend.product.units.update');

    Route::post('/search', 'UnitController@search')
        ->name('backend.product.units.search');


});

// Item
Route::group(['prefix' => 'items'], function () {
    Route::get('/unpublished', 'ItemController@unpublished')
        ->name('backend.product.items.unpublished.index');
    Route::get('/unpublished/edit/{id}', 'ItemController@editUnpublished')
        ->name('backend.product.items.unpublished.edit');

    Route::get('/published', 'ItemController@published')
        ->name('backend.product.items.published.index');
    Route::get('/published/edit/{id}', 'ItemController@editPublished')
        ->name('backend.product.items.published.edit');


    // non view
    Route::get('/destroy/{id}', 'ItemController@destroy')
        ->name('backend.product.items.destroy');
    Route::post('/update/{id}', 'ItemController@update')
        ->name('backend.product.items.update');
});

// Collections
Route::group(['prefix' => 'collection'], function () {

    Route::get('/', 'CollectionController@index')->name('backend.product.collections.index');
    Route::get('/collection/create', 'CollectionController@create')->name('backend.product.collections.create');
    Route::post('/collection/store', 'CollectionController@store')->name('backend.product.collections.store');
    Route::get('/collection/edit/{id}', 'CollectionController@edit')->name('backend.product.collections.edit');
    Route::post('/collection/update', 'CollectionController@update')->name('backend.product.collections.update');
    Route::get('/collection/destroy/{id}', 'CollectionController@destroy')->name('backend.product.collections.destroy');

    //seach
    Route::post('/seach', 'CollectionController@search')->name('admin.product.collections.search');
});

// Tags
Route::group(['prefix' => '/tag'], function () {
    Route::get('/', 'TagController@index')->name('backend.product.tags.index');
    Route::get('/create', 'TagController@create')->name('backend.product.tags.create');
    Route::post('/store', 'TagController@store')->name('backend.product.tags.store');
    Route::get('/edit/{tag}', 'TagController@edit')->name('backend.product.tags.edit');
    Route::post('/update/{tag}', 'TagController@update')->name('backend.product.tags.update');
    Route::get('/delete/{tag}', 'TagController@destroy')->name('backend.product.tags.destroy');
    Route::post('/search', 'TagController@search')->name('backend.product.tags.search');
});

// Warranty Types
Route::group(['prefix' => 'warranty-types'], function () {
    Route::get('/', 'WarrantyTypeController@index')->name('backend.product.warranty-types.index');
    Route::get('/create', 'WarrantyTypeController@create')->name('backend.product.warranty-types.create');
    Route::get('/edit/{id}', 'WarrantyTypeController@edit')->name('backend.product.warranty-types.edit');

    // non view
    Route::get('/destroy/{id}', 'WarrantyTypeController@destroy')->name('backend.product.warranty-types.destroy');
    Route::post('/store', 'WarrantyTypeController@store')->name('backend.product.warranty-types.store');
    Route::post('/update/{id}', 'WarrantyTypeController@update')->name('backend.product.warranty-types.update');
    Route::post('/search', 'WarrantyTypeController@search')->name('backend.product.warranty-types.search');
});
