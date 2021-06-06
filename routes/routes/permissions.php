<?php

//////////////////////////////////////////////////////////////////////////////
// BACKEND PERMISSIONS ROUTES
//////////////////////////////////////////////////////////////////////////////

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function() {
   Route::post('permissions/restore/{permission}', 'PermissionsController@restore')          ->name('permissions.restore');
   Route::post('permissions/delete/{permission}',  'PermissionsController@delete')           ->name('permissions.delete');
   Route::delete('permissions/mass_destroy',       'PermissionsController@massDestroy')      ->name('permissions.mass_destroy');
   Route::post('permissions/mass_restore',         'PermissionsController@massRestore')      ->name('permissions.mass_restore');
   Route::delete('permissions/mass_delete',        'PermissionsController@massDelete')       ->name('permissions.mass_delete');
   Route::get('permissions/trashed',               'PermissionsController@trashed')          ->name('permissions.trashed');
   Route::get('permissions/noRoles',               'PermissionsController@noRoles')          ->name('permissions.noRoles');
   Route::post('permissions/storeSingle',          'PermissionsController@storeSingle')      ->name('permissions.storeSingle');
   Route::post('permissions/storeMultiple',        'PermissionsController@storeMultiple')    ->name('permissions.storeMultiple');
   Route::post('permissions/storeCrud',            'PermissionsController@storeCrud')        ->name('permissions.storeCrud');
   Route::post('permissions/storeBread',           'PermissionsController@storeBread')       ->name('permissions.storeBread');
   Route::resource('permissions',                  'PermissionsController')                  ->except('create','store');
});
