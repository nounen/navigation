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
        Route::prefix('category')->group(function () {
    //        Route::get('', 'CategoryController@index');
            // 列表
            Route::get('/{id}/list', 'CategoryController@index');

            // 创建
            Route::get('/{id}/create', 'CategoryController@create');
            Route::post('/{id}/store', 'CategoryController@store');

            // 修改
            Route::get('/{id}/edit', 'CategoryController@edit');
            Route::patch('/{id}/update', 'CategoryController@update');

            // 删除
            Route::delete('/{id}', 'CategoryController@delete');
        });


        /**
         * （分类下的）链接管理
         */
        Route::prefix('link')->group(function () {
            // 列表
            Route::get('/{id}/list', 'LinkController@index');

            // 创建
            Route::get('/{id}/create', 'LinkController@create');
            Route::post('/{id}/store', 'LinkController@store');

            // 修改
            Route::get('/{id}/edit', 'LinkController@edit');
            Route::patch('/{id}/update', 'LinkController@update');

            // 删除
            Route::delete('/{id}', 'LinkController@delete');
        });


        /**
         * SEO 设置
         */
        Route::prefix('setting')->group(function () {
            Route::get('/edit', 'SettingController@edit');
            Route::post('/store', 'SettingController@store');
        });
    });
});
