<?php
Route::group(['namespace'=>'Admin'],function(){
    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\LoginController@login');
    Route::post('/logout', 'Auth\LoginController@logout')->name('admin.logout');

    Route::middleware(["auth:admin"])->group(function () {
        Route::get('/', 'AdminController@index')->name('admin');
        Route::get('/article/create', 'ArticleController@create')->name('article.create');
        Route::post('/article/store', 'ArticleController@store')->name('article.store');
    });

});
Route::post('/upload','UploadController@image');
