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
    Route::get('/series', 'SeriesController@index')->name('createseries');
    Route::post('/series', 'SeriesController@store')->name('StoreSeries');
    Route::resource('characters', 'CharactersController');
    Route::get('/characters', 'CharactersController@index')->name('CreateCharacters');
    Route::post('/characters', 'CharactersController@store')->name('StoreCharacters');
    Route::resource('classification', 'ClassificationController');
    Route::get('/classification', 'ClassificationController@index')->name('CreateClassification');
    Route::post('/classification', 'ClassificationController@store')->name('StoreClassification');
    Route::resource('faction', 'FactionController');
    Route::get('/faction', 'FactionController@index')->name('CreateFaction');
    Route::post('/faction', 'FactionController@store')->name('StoreFaction');
    Route::resource('collection', 'CollectionController');
    Route::get('/collection', 'CollectionController@index')->name('CreateCollection');
    Route::post('/collection', 'CollectionController@store')->name('StoreCollection');
    Route::get('/home', 'HomeController@index')->name('home');

});
