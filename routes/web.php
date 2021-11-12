<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('hello/{nev}',function(string $nev){
    return $nev;
})->whereAlpha('nev')
->name("hello-nev");


Route::get('hello',function(){
    return "Hello";
})->name("hello");