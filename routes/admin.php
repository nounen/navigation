<?php

Route::namespace('Admin')->prefix('/admin')->name('admin.')->group(function () {
    Auth::routes();

    Route::get('/', function() {
        return redirect(url('admin/login'));
    });

    Route::middleware(['auth'])->group(function () {
        // 表单元素案例
        Route::get('/form_example', 'FormController@example');
        Route::post('/form_example', 'FormController@postExample');

//        Route::get('/category', 'CategoryController@index');
        Route::get('/category/{id}/list', 'CategoryController@index');

        Route::get('/category/{id}/edit', 'CategoryController@edit');
        Route::patch('/category/{id}/update', 'CategoryController@update');

        Route::get('/category/{id}/create', 'CategoryController@create');
        Route::post('/category/{id}/store', 'CategoryController@store');
    });
});
