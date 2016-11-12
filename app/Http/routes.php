<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'api'], function() {
   Route::get('/category', 'CategoryController@getAllCategory');
   Route::get('/category/{category}', 'CategoryController@getMotorbyCategory');
   Route::get('/motorcycle/{id}', 'MotorcycleController@show');
   Route::get('/motorcycle/accessories/{id}', 'MotorcycleController@showAccessories');
   Route::get('/accessory/{id}', 'AccessoryController@show');
   Route::get('/accessory', 'AccessoryController@index');

   Route::get('/news/{id}', 'NewsController@show');
   Route::get('/event/{id}', 'EventController@show');
   Route::get('/event/distance/{id}', 'EventController@distance');
   Route::get('/eventInDistance', 'EventController@getInDistance');
   Route::post('/attendedEvent', 'AttendedEventController@attendEvent');
});