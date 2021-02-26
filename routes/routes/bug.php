<?php

//////////////////////////////////////////////////////////////////////////////
// BACKEND BUGS ROUTES
//////////////////////////////////////////////////////////////////////////////

Route::prefix('admin')->namespace('Admin')->name('admin.')->group(function() {

	// Generate routes based on options in Model
	foreach(App\Models\Bug::statusOptions() as $statusOptionKey => $statusOptionValue) {
		Route::get(
			'bugs/' . strtolower(str_replace(" ", "", $statusOptionValue)),
			'BugsController@' . strtolower(str_replace(" ", "", $statusOptionValue)))
			 ->name('bugs.' . strtolower(str_replace(" ", "", $statusOptionValue)));
	}

	Route::get('bugs/trashed',		   		  'BugsController@trashed')   		 ->name('bugs.trashed');
	Route::get('bugs/trashedShow',		     'BugsController@trashedShow')      ->name('bugs.trashedShow');
	Route::post('bugs/restore/{bug}',        'BugsController@restore')          ->name('bugs.restore');
   Route::post('bugs/delete/{bug}',         'BugsController@delete')           ->name('bugs.delete');
   Route::delete('bugs/mass_destroy',       'BugsController@massDestroy')      ->name('bugs.mass_destroy');
   Route::post('bugs/mass_restore',         'BugsController@massRestore')      ->name('bugs.mass_restore');
   Route::delete('bugs/mass_delete',        'BugsController@massDelete')       ->name('bugs.mass_delete');
   Route::resource('bugs', 'BugsController');
});


//////////////////////////////////////////////////////////////////////////////
// FRONTEND BUGS ROUTES
//////////////////////////////////////////////////////////////////////////////

Route::resource('bugs', 'UI\BugsController');