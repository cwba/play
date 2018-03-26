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

Route::get('/test', function(){
    $a1=array('a'=>"Dog",1=>"Cat",2=>"Horse",3=>"Bird");
    $a2=array(0=>"Tiger",1=>"Lion");
    array_splice($a1,0,3,$a2);
    print_r($a1);
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');