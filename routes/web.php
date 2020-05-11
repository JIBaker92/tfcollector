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
    return view('auth/login');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function() {
    Route::resource('series', 'SeriesController');
    Route::post('/series', 'SeriesController@store')->name('StoreSeries');
    Route::resource('characters', 'CharactersController');
    Route::post('/characters', 'CharactersController@create')->name('CreateCharacters');
    Route::resource('classification', 'ClassificationController');
    Route::post('/classification', 'ClassificationController@create')->name('CreateClassification');
    Route::resource('faction', 'FactionController');
    Route::post('/faction', 'FactionController@create')->name('CreateFaction');
    Route::get('/home', 'HomeController@index')->name('home');

});
