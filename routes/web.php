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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'ItemController@index')->name('item/index');
Route::get('/Item/create', 'ItemController@create');
Route::get('/Item/{$id}', 'ItemController@show');
Route::get('/User/{$id}', 'UserController@show');
Route::get('/User/address', 'AddressController@create');
Route::post('Item/{item}/favorites', 'FavoriteController@store')->name('favorites');
Route::post('Item/{item}/unfavorites', 'FavoriteController@destroy')->name('unfavorites');

// Route::post('/Item', [ItemController::class, 'store']);

// Route::resource('Item', [ItemController::class]);
Route::resource('Item', 'ItemController');
Route::resource('User', 'UserController');
Route::resource('Address', 'AddressController');
Route::resource('Favorite', 'FavoriteController');
Route::resource('Item.favorite', 'FavoriteController');