<?php

Route::namespace('Web')->name('web.')->group(function () {
    Route::get('/', 'HomeController@home');
    Route::get('/{id}', 'HomeController@home');
});
