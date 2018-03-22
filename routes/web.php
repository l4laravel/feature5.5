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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/users',function (){
   $users = \App\User::all();

//    dd() dump after that code not work
 //  return $users->sortByDesc('id')->dd()->where('created_at', '2018-03-21 16:20:13')->dump();

//    dump() mean work as dd but not die; you can many time dump() method we use two time here
    return $users->sortByDesc('id')->dump()->where('created_at', '2018-03-21 16:20:13')->dump();

});


Route::get('/add',function (){

    return view('add_user');
});


Route::post('add-user',function (\Illuminate\Http\Request $request){

    // this is old way
/*    $this->validate($request,[
       'name' => 'required',
       'email' =>'required',
       'password' =>'required'

    ]);*/

    // new way right now

   /* $request->validate([
        'name' => 'required',
        'email' =>'required',
        'password' =>'required'

    ]);*/


});

