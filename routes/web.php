<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('tasks/create','TaskController@create');
Route::post('tasks','TaskController@store');
