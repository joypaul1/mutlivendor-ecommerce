<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'reports'], function () {
    Route::get('/seller-due', 'ReportController@due_sellers')->name('backend.report.due.seller');
    Route::get('/agent-due', 'ReportController@due_agents')->name('backend.report.due.agent');
    Route::get('/sales', 'ReportController@sales')->name('backend.report.sales');
    Route::get('/deliveries', 'ReportController@deliveries')->name('backend.report.deliveries');
});
