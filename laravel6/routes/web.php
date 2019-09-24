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


Route::get('/', 'PagesController@Index' );
Route::get('/about', 'PagesController@About' );
Route::get('/services', 'PagesController@Services' );


/*
Route::get('/', function () {
    return view('welcome');
   //return ('<h1>Hello World</h1>');
});


Route::get('/hello', function () {
    //return view('welcome');
   return ('<h1>Hello World</h1>');
});

Route::get('/users/{id}/{name}', function ($id,$name) {
    //return view('welcome');
   return ('This is user ' . $name . ' with an id of ' . $id);
});


Route::get('/about', function(){
    return view('pages.about');
});*/