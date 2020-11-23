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
    return view('bookrecord');
});


Route::get('/insert', function () {
    return view('insert');
});

Route::get('/update', function () {
    return view('update');
});

Route::get('/welcome', function () {
    return view('welcome');
});


Route::prefix('api')->group(function() {
    Route::delete('book/{id}','App\Http\Controllers\bookController@destroy');
    //Route::put('book/{id}', 'bookController@update');
    Route::put('book/{id}', 'bookController@update'); 
    Route::post('book/','bookController@store');
    Route::get('book/','bookController@index');
    Route::get('book/{id}','App\Http\Controllers\bookController@show');
});