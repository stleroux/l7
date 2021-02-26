<?php

//////////////////////////////////////////////////////////////////////////////
// BACKEND USER ROUTES
//////////////////////////////////////////////////////////////////////////////

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function() {
   Route::get('users/enable/{user}',		'UsersController@approve')			->name('users.enable');
   Route::get('users/disable/{user}',		'UsersController@disable')			->name('users.disable');
   Route::post('users/restore/{user}',		'UsersController@restore')			->name('users.restore');
   Route::post('users/delete/{user}',		'UsersController@delete')			->name('users.delete');
   
   Route::delete('users/mass_destroy',		'UsersController@massDestroy')	->name('users.mass_destroy');
   Route::post('users/mass_restore',		'UsersController@massRestore')	->name('users.mass_restore');
   Route::delete('users/mass_delete',		'UsersController@massDelete')		->name('users.mass_delete');

   Route::post('users/mass_approve',      'UsersController@massApprove')   ->name('users.mass_approve');
   Route::post('users/mass_disable',      'UsersController@massDisable')   ->name('users.mass_disable');
   
   Route::get('users/trashed',				'UsersController@trashed')			->name('users.trashed');
   Route::get('users/noRoles',				'UsersController@noRoles')			->name('users.noRoles');
   Route::get('users/approved',           'UsersController@approved')      ->name('users.approved');
   Route::get('users/disabled',           'UsersController@disabled')      ->name('users.disabled');
   Route::resource('users',					'UsersController');
});
