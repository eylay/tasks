<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('tasks/create','TaskController@create');
Route::get('tasks/{task}','TaskController@show')->where('task', '[0-9]+');
Route::get('tasks','TaskController@index');
Route::post('tasks','TaskController@store');
