<?php

use Illuminate\Support\Facades\Route;

/*


Route::get('/', function () {
    return view('welcome');
});
*/

Route::view('/', 'home');

Route::view('/first', 'posts.first');

Route::view('/second', 'posts.second');

Route::view('/third', 'posts.third');