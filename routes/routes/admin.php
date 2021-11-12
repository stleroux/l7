<?php

//////////////////////////////////////////////////////////////////////////////
// BACKEND ADMIN ROUTES
//////////////////////////////////////////////////////////////////////////////

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function() {
   Route::get('dashboard',            'AdminController@index')             ->name('dashboard');
   Route::post('/quickSearch',        'SearchController@quickSearch')      ->name('quickSearch');
   Route::get('/advancedSearch',      'SearchController@advancedSearch')   ->name('advancedSearch');
   Route::post('/advancedSearch',     'SearchController@advSearch')        ->name('advSearch');
   Route::post('/advancedSearchSave', 'SearchController@advSearchSave')    ->name('advSearchSave');
   
   // Route::get('fsettings',             'FsettingsController@index')      ->name('frontend');
   // Route::put('fsettings/{fsetting}',  'FsettingsController@update')     ->name('frontend.update');
   // Route::get('fsettingsupdated',      'FsettingsController@updated')    ->name('frontend.updated');

});
