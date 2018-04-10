<?php

/*frontend routes */
Route::get('/','Frontend\FrontendController@index');
Route::get('{slug}','Frontend\FrontendController@page');