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

        /**
         * 分类管理
         */
//        Route::get('/category', 'CategoryController@index');
        // 列表
        Route::get('/category/{id}/list', 'CategoryController@index');

        // 创建
        Route::get('/category/{id}/create', 'CategoryController@create');
        Route::post('/category/{id}/store', 'CategoryController@store');

        // 修改
        Route::get('/category/{id}/edit', 'CategoryController@edit');
        Route::patch('/category/{id}/update', 'CategoryController@update');


        /**
         * （分类下的）链接管理
         */
        // 列表
        Route::get('/link/{id}/list', 'LinkController@index');

        // 创建
        Route::get('/link/{id}/create', 'LinkController@create');
        Route::post('/link/{id}/store', 'LinkController@store');

        // 修改
        Route::get('/link/{id}/edit', 'LinkController@edit');
        Route::patch('/link/{id}/update', 'LinkController@update');

        Route::delete('/link/{id}', 'LinkController@delete');

    });
});
