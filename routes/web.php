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

// Auth::routes();
Auth::routes();

route::group(['middleware'=>'auth'],function(){
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/artist', 'ArtistController');
Route::resource('/album', 'AlbumController');
Route::resource('/track', 'TrackController');
Route::resource('/played', 'PlayedController');

Route::get('/', function () {
    return view('index');
});
});

// Route::resource('/artist', 'ArtistController');
// Route::resource('/album', 'AlbumController');
// Route::resource('/track', 'TrackController');
// Route::resource('/played', 'PlayedController');


// Route::get('artist/{id}/edit', 'ArtistController@edit');
// Route::get('artist/{id}', 'ArtistController@update');
// Route::delete('artist/{id}', 'ArtistController@destroy');

// Route::get('album/{id}/edit', 'AlbumController@edit');
// Route::get('album/{id}', 'AlbumController@update');
// Route::delete('album/{id}', 'AlbumController@destroy');

// Route::get('track/{id}/edit', 'TrackController@edit');
// Route::get('track/{id}', 'TrackController@update');
// Route::delete('track/{id}', 'TrackController@destroy');

// Route::get('played/{id}/edit', 'PlayedController@edit');
// Route::get('played/{id}', 'PlayedController@update');
// Route::delete('played/{id}', 'PlayedController@destroy');



// Route::get('/artist/create', 'ArtistController@create');
// Route::post('/artist', 'ArtistController@store');

// Route::get('/album', 'AlbumController@index');

// Route::get('/track', 'TrackController@index');

// Route::get('/played', 'PlayedController@index');

// route::group(['middleware'=>'auth'],function(){
// 	route::resource('/artist', 'artistcontroller');
// });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
