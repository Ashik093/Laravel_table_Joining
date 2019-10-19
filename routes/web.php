<?php


Route::get('/', function () {
    return view('welcome');
});


Route::get('add-category','CategoryController@Index')->name('add.category');
Route::post('insert-category','CategoryController@store');
Route::get('all-category','CategoryController@show')->name('all.category');

Route::get('add-subCategory','SubCategoryController@Index')->name('add.subCategory');
Route::post('insert-sub-category','SubCategoryController@store');
Route::get('all-subCategory','SubCategoryController@show')->name('all.subCategory');

Route::get('add-post','PostController@Index')->name('add.post');
Route::post('insert-post','PostController@store');
Route::get('all-post','PostController@show')->name('all.post');