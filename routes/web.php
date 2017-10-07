<?php

Route::get('/', 'DefaultController@getIndex');
Route::get('edit/{id}', 'DefaultController@getIndex');
Route::get('delete/{id}', 'DefaultController@getDelete');

Route::post('savepost', 'DefaultController@postSavepost');

Route::get('info', 'DefaultController@getInfo');
