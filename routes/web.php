<?php

Route::get('/image/form', 'ImageController@form');
Route::post('/image/upload', 'ImageController@upload');