<?php

//////////////////////////////////////////////////////////////////////////////
// ADMIN ROUTES
//////////////////////////////////////////////////////////////////////////////
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function() {
   Route::get('dashboard', 'AdminController@index')->name('dashboard');
   
   Route::get('general',	'FrontendController@index')	->name('general');

   // Route::get('homepage',	'FrontendController@edit')		->name('homepage.edit');
   Route::put('homepage', 'FrontendController@update')	->name('homepage.update');
   Route::get('updated',	'FrontendController@updated')	->name('homepage.updated');
});
