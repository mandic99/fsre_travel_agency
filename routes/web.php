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

use App\Trip;
use App\City;

Route::get('/', function () {
    $trip = Trip::find(1);
    $cities = City::all();
    return view('index')->withTrip($trip)->withCities($cities);
});

Route::get('mid', function () {
    return view('mid');
})->name('mid');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('countries', 'CountryController');
Route::resource('cities', 'CityController');
Route::resource('trips', 'TripController');
Route::resource('users', 'UsersController');
Route::get('/check', 'TripController@check')->name('trips.check');
//Route::resource('admin/users', 'UserController', ['except' => ['show', 'store', 'create']]);
