<?php

Route::prefix('razen-supportboard')->group(function(){
    Route::prefix('admin')->group(function(){
        Route::prefix('dashboard')->group(function(){
            Route::get('/', 'RazenSupportboard\Admin\DashboardController@index')->name('razen-supportboard.admin.dashboard.index');
            Route::post('/change', 'RazenSupportboard\Admin\DashboardController@change')->name('razen-supportboard.admin.dashboard.change');
        });
    });
});
