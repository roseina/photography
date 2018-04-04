<?php

/*frontend routes */
Route::get('/','Frontend\FrontendController@index');
Route::get('/about-us','Frontend\FrontendController@about');
Route::get('/services','Frontend\FrontendController@services');
Route::get('/contact-us','Frontend\FrontendController@contact');
Route::get('/gallery','Frontend\FrontendController@gallery');