<?php


Route::get('/', 'AdminController@homeView');
Route::get('', 'AdminController@homeView');


//KÉP MŰVELETEK
Route::get('/crop_modal/{id}/{field}/{prefix}/{model_name}', 'CRUD\ThumbnailController@cropModalView');
Route::post('/show_crop_image_modal', 'ThumbnailController@showCropImageModal');
Route::post('/make_crop', 'ThumbnailController@makeCrop');
Route::post('/upload_image', 'ThumbnailController@uploadImage');

