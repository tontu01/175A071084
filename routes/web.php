<?php

// ========== FRONTEND AREA ==========
Route::group(['prefix'=>'/', 'as'=>'frontend.', 'namespace' => 'Frontend'], function(){
    Route::get('/', ['as' => 'home', 'uses' => 'FrontendController@index']);
    Route::get('sv-management/login', ['as' => 'login', 'uses' => 'AuthController@showFormLogin']);
    Route::post('sv-management/login', ['as' => 'login.post', 'uses' => 'AuthController@postLogin']);
    Route::get('sv-management/logout', ['as' => 'logout', 'uses' => 'AuthController@logout']);
//    Route::get('sv-management', ['as' => 'student.detail', 'uses' => 'StudentController@index'])->middleware('authFrontend');
    Route::get('sv-management/student', ['as' => 'student.detail', 'uses' => 'StudentController@index']);
    Route::get('sv-management/diem', ['as' => 'diemSV', 'uses' => 'StudentController@diem'])->middleware('authFrontend');
});

// ========== BACKEND AREA ==========
Route::get('management/login', ['as' => 'backend.login', 'uses' => 'Backend\AuthController@showFormLogin']);
Route::post('management/login', ['as' => 'backend.login.post', 'uses' => 'Backend\AuthController@postLogin']);
Route::get('management/logout', ['as' => 'backend.logout', 'uses' => 'Backend\AuthController@logout'])->middleware('authBackend');

Route::group(['prefix'=>'management/', 'as'=>'backend.',  'namespace' => 'Backend', 'middleware' => ['authBackend']], function(){
    // ========== Module Student ==========
    Route::group(['as'=>'student.'], function(){
        Route::get('/', ['as' => 'list', 'uses' => 'StudentController@index']);
        Route::get('/add', ['as' => 'create', 'uses' => 'StudentController@create']);
        Route::post('/store', ['as' => 'store', 'uses' => 'StudentController@store']);
        Route::get('/{id}/edit', ['as' => 'edit', 'uses' => 'StudentController@edit']);
        Route::post('/{id}', ['as' => 'update', 'uses' => 'StudentController@update']);
        Route::delete('/{id}', ['as' => 'destroy', 'uses' => 'StudentController@destroy']);
    });

    Route::get('/hedaotao', ['as' => 'hedaotao.list', 'uses' => 'HedaotaoController@index']);
    Route::get('/khoahoc', ['as' => 'khoahoc.list', 'uses' => 'KhoaHocController@index']);
    Route::get('/lop', ['as' => 'lop.list', 'uses' => 'LopController@index']);
    Route::get('/monhoc', ['as' => 'monhoc.list', 'uses' => 'MonHocController@index']);

    Route::group(['prefix'=>'diem/', 'as'=>'diem.'], function(){
        Route::get('/', ['as' => 'list', 'uses' => 'DiemController@index']);
        Route::get('/add', ['as' => 'create', 'uses' => 'DiemController@create']);
        Route::post('/store', ['as' => 'store', 'uses' => 'DiemController@store']);
        Route::get('/{id}/edit', ['as' => 'edit', 'uses' => 'DiemController@edit']);
        Route::post('/{id}', ['as' => 'update', 'uses' => 'DiemController@update']);
        Route::delete('/{id}', ['as' => 'destroy', 'uses' => 'DiemController@destroy']);
    });
});
// ========== END BACKEND AREA ==========


