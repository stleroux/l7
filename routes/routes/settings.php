<?php

//////////////////////////////////////////////////////////////////////////////
// SETTINGS ROUTES
//////////////////////////////////////////////////////////////////////////////
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function() {
   Route::get('settings', 'SettingsController@index')->name('settings.index');
   Route::post('settings', 'SettingsController@store')->name('settings.store');
   Route::get('updateds', 'SettingsController@updated')->name('settings.updated');
});