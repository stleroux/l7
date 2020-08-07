<?php

//////////////////////////////////////////////////////////////////////////////
// USER ROUTES
//////////////////////////////////////////////////////////////////////////////
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function() {
   Route::get('users/restore/{user}',		'UsersController@restore')			->name('users.restore');
   Route::post('users/delete/{user}',		'UsersController@delete')			->name('users.delete');
   Route::delete('users/mass_destroy',		'UsersController@massDestroy')	->name('users.mass_destroy');
   Route::post('users/mass_restore',		'UsersController@massRestore')	->name('users.mass_restore');
   Route::delete('users/mass_delete',		'UsersController@massDelete')		->name('users.mass_delete');
   Route::get('users/trashed',				'UsersController@trashed')			->name('users.trashed');
   Route::get('users/noRoles',				'UsersController@noRoles')			->name('users.noRoles');
   Route::resource('users',					'UsersController');
});
