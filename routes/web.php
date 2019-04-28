<?php


Route::get('/{any}','SinglePageController@index')->where('any','.*');


//Route::get('/test','SinglePageController@test');


