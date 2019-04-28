<?php

Route::get('login',['as' => 'login','uses' => 'UserController@login']);

Route::post('login','UserController@login');

Route::post('register','UserController@register');


Route::group(['middleware' => 'auth:api'],function ()
{
    Route::get('/my-bookings','UserController@getBookings');

    Route::resource('/booking','BookingController');

    Route::get('/booking/by-date/{date}','BookingController@getBookingsOfDay');

    Route::resource('/room','RoomController');
});
