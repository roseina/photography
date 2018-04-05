<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/admin', function () {
	return view('welcome');
});
/*  Backend routes */
Route::get('admin/dashboard','Admin\AdminController@index');

/*gallery routes */

Route::get('admin/gallery','Admin\galleryController@index');
Route::get('admin/gallery/newgallery','Admin\galleryController@newgallery');
Route::post('admin/gallery/savegallery','Admin\galleryController@savegallery');
Route::get('admin/gallery/editgallery','Admin\galleryController@editgallery');
Route::post('admin/gallery/updategallery','Admin\galleryController@updategallery');
Route::get('admin/gallery/deletegallery','Admin\galleryController@deletegallery');
Route::get('admin/gallery/changestatus','Admin\galleryController@changeStatus');
Route::get('admin/gallery/galleryphotos','Admin\galleryController@photos');
Route::get('admin/gallery/galleryphotos/addphoto','Admin\galleryController@addPhotos');
Route::post('admin/gallery/galleryphotos/savephoto','Admin\galleryController@savePhotos');
Route::get('admin/gallery/galleryphotos/togglestatus','Admin\galleryController@toggleStatus');
Route::get('admin/gallery/galleryphotos/editphoto','Admin\galleryController@editPhoto');
Route::get('admin/gallery/galleryphotos/viewphotos','Admin\galleryController@viewPhotos');
Route::get('admin/gallery/galleryphotos/delimage','Admin\galleryController@delImage');
Route::post('admin/gallery/galleryphotos/updatephoto','Admin\galleryController@updatePhoto');
Route::get('admin/gallery/galleryphotos/deletephoto','Admin\galleryController@delPhoto');

/*settings route */

Route::get('admin/settings/web','Admin\SettingsController@webSettings');
Route::post('admin/savesettings','Admin\SettingsController@savesettings');
Route::get('admin/settings/user','Admin\SettingsController@userSettings');
Route::get('admin/settings/user/changepassword','Admin\SettingsController@changePassword');
Route::post('admin/settings/user/updatePassword','Admin\SettingsController@updatePassword');
Route::get('/forgetPassword','Admin\SettingsController@forgotpassword');
Route::post('admin/settings/user/forgetPassword','Admin\SettingsController@getPassword');

/*pages routes */
Route::get('admin/pages','Admin\PagesController@index');
Route::get('admin/pages/addnew','Admin\PagesController@create');
Route::post('admin/pages/savepage','Admin\PagesController@store');
Route::get('admin/pages/changestatus','Admin\PagesController@changeStatus');
Route::get('admin/pages/edit','Admin\PagesController@edit');
Route::post('admin/pages/update','Admin\PagesController@update');
Route::get('admin/pages/delimage','Admin\PagesController@delImage');
Route::get('admin/pages/delete','Admin\PagesController@delete');



Auth::routes();
/* banner routes */
Route::get('admin/banner', 'Admin\BannerController@index');
Route::get('admin/banner/addnew' , 'Admin\BannerController@create');
Route::post('admin/banner/store','Admin\BannerController@store');
Route::get('admin/banner/edit','Admin\BannerController@edit');
Route::post('admin/banner/update','Admin\BannerController@update');
Route::get('admin/banner/delete','Admin\BannerController@delete');
Route::get('admin/banner/delimage','Admin\BannerController@delImage');

/* homecomponent routes */
Route::get('admin/homecomponent','Admin\HomeComponentController@index');
Route::get('admin/homecomponent/addnew','Admin\HomeComponentController@create');
Route::post('admin/homecomponent/store','Admin\HomeComponentController@store');
Route::get('admin/homecomponent/edit','Admin\HomeComponentController@edit');
Route::post('admin/homecomponent/update','Admin\HomeComponentController@update');
Route::get('admin/homecomponent/changeStatus','Admin\HomeComponentController@changeStatus');
Route::get('admin/homecomponent/delImage','Admin\HomeComponentController@delImage');
Route::get('admin/homecomponent/delete','Admin\HomeComponentController@delete');

Route::get('/home', 'Admin\AdminController@index');


/*events routes */
Route::get('admin/event','Admin\EventsController@index');
Route::get('admin/event/addnew' ,'Admin\EventsController@create');
Route::post('admin/event/store','Admin\EventsController@store');
Route::get('admin/event/edit','Admin\EventsController@edit');
Route::post('admin/event/update','Admin\EventsController@update');
Route::get('admin/event/changeStatus','Admin\EventsController@changeStatus');
Route::get('admin/event/delImage','Admin\EventsController@delImage');
Route::get('admin/event/delete','Admin\EventsController@delete');

/*frontend routes */

@include('frontend.php');