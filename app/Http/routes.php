<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Index Routes (www.totmp.com)
|--------------------------------------------------------------------------
|
| This is front end Route and This site is blog web site.
| My name is Hezhongli,from Beijing China.I'm a programmer Personnel
| Exchange of learning and Opinion feedback contact
| mail:newhzl@163.com or
| git:https://github.com/githzl
|
*/

Route::group(['domain' => 'blog.totmp.com','namespace' => 'blog'],function(){
    Route::any('/','IndexController@index');
});

Route::group(['domain' => 'back.totmp.com','namespace' => 'back'],function(){
    Route::any('/','IndexController@index');
});


