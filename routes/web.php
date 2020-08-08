<?php

use Ethereal\Support\Facades\Route;

Route::get('/', 'HomeController@index');

Route::auth(function () {
    Route::get('login', 'PageController@login');

    Route::post('login', 'UserController@login');

    Route::get('register', 'PageController@register');

    Route::post('register', 'UserController@register');
});
