<?php

Route::get('/', function () {
    return view('welcome');
});

Route::resource('tasks','TaskController');

Route::post('ajax/{mehtod}','AjaxController@main');
