<?php

/*frontend routes */
Route::get('/','Frontend\FrontendController@index');
Route::get('/aboutus','Frontend\FrontendController@about');
Route::get('/our-event','Frontend\FrontendController@events');
Route::get('/contact-us','Frontend\FrontendController@contact');
Route::get('/gallery','Frontend\FrontendController@gallery');