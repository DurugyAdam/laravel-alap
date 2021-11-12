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

Route::get('/doctor-house', function () {
    return 'Nemcsak az emberek megalázásával lehet a gőzt kiereszteni; mondják,
    hogy a bowling jobb még ennél is.';
});
Route::get('/uvegtigris/csoki', function () {
    return "Mennyire vagy túsz? Sörhöz odaférsz?";
});
Route::get('/uvegtigris/lali', function () {
    return "Az egybubis az egy kicsit drágább, mert hát abból ki kellett vennem
    a többi bubit.";
});
Route::get('/uvegtigris/lali', function () {
    return "Az egybubis az egy kicsit drágább, mert hát abból ki kellett vennem
    a többi bubit.";
});
Route::get('/naptar/ma', function () {
    return date('Y.m.d');
});
Route::get('/naptar/holnap', function () {

    return date("Y.m.d");
});
/*
Route::get('hello/{nev}',function(string $nev){
    return $nev;
})->whereAlpha('nev')
->name("hello-nev");


Route::get('hello',function(){
    return "Hello";
})->name("hello");*/