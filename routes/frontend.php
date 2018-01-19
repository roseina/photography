<?php

/*frontend routes */
Route::get('/','Frontend\FrontendController@index');
Route::get('//client','Frontend\FrontendController@client');
Route::get('/book-online','Frontend\FrontendController@bookonline');
Route::get('/contact-us','Frontend\FrontendController@contact');
Route::get('/gallery','Frontend\FrontendController@gallery');