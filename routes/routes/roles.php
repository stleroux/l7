<?php

//////////////////////////////////////////////////////////////////////////////
// BACKEND ROLES ROUTES
//////////////////////////////////////////////////////////////////////////////

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function() {
   Route::post('roles/restore/{role}',       'RolesController@restore')          ->name('roles.restore');
   Route::post('roles/delete/{role}',        'RolesController@delete')           ->name('roles.delete');
   Route::delete('roles/mass_destroy',       'RolesController@massDestroy')      ->name('roles.mass_destroy');
   Route::post('roles/mass_restore',         'RolesController@massRestore')      ->name('roles.mass_restore');
   Route::delete('roles/mass_delete',        'RolesController@massDelete')       ->name('roles.mass_delete');
   Route::get('roles/trashed',               'RolesController@trashed')          ->name('roles.trashed');
   Route::get('roles/noPermissions',         'RolesController@noPermissions')    ->name('roles.noPermissions');
   Route::get('roles/addAllPerms/{role}',    'RolesController@addAllPerms')      ->name('roles.addAllPerms');
   Route::get('roles/removeAllPerms/{role}', 'RolesController@removeAllPerms')   ->name('roles.removeAllPerms');
   Route::resource('roles',                  'RolesController');
});
