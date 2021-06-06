<?php

//////////////////////////////////////////////////////////////////////////////
// BACKEND ADMIN ROUTES
//////////////////////////////////////////////////////////////////////////////

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function() {
   Route::get('dashboard', 	'AdminController@index')		->name('dashboard');
   
   Route::get('general',	'FrontendController@index')		->name('general');
   Route::put('homepage',  	'FrontendController@update')	->name('homepage.update');
   Route::get('updated',	'FrontendController@updated')	->name('homepage.updated');

});
