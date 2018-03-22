<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// we can create veiw in router

Route::view('/','welcome');


// we can redirect url form router like this
// first paramter hit url second parameter redirect that url

Route::redirect('/hello','/');

