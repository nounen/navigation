<?php

Route::namespace('Web')->name('web.')->group(function () {
    Route::get('/', 'HomeController@home');
});