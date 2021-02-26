<?php

//////////////////////////////////////////////////////////////////////////////
// BACKEND FEATURES ROUTES
//////////////////////////////////////////////////////////////////////////////

Route::prefix('admin')->namespace('Admin')->name('admin.')->group(function() {

	// Generate routes based on options in Model
	foreach(App\Models\Feature::statusOptions() as $statusOptionKey => $statusOptionValue) {
		Route::get(
			'features/' . strtolower(str_replace(" ", "", $statusOptionValue)),
			'FeaturesController@' . strtolower(str_replace(" ", "", $statusOptionValue)))
			 ->name('features.' . strtolower(str_replace(" ", "", $statusOptionValue)));
	}

	Route::get('features/trashed',		         		'FeaturesController@trashed')          ->name('features.trashed');
	Route::get('features/trashedShow',		      		'FeaturesController@trashedShow')      ->name('features.trashedShow');
	Route::post('features/restore/{feature}',         	'FeaturesController@restore')          ->name('features.restore');
   Route::post('features/delete/{feature}',         	'FeaturesController@delete')           ->name('features.delete');
   Route::delete('features/mass_destroy',       		'FeaturesController@massDestroy')      ->name('features.mass_destroy');
   Route::post('features/mass_restore',         		'FeaturesController@massRestore')      ->name('features.mass_restore');
   Route::delete('features/mass_delete',        		'FeaturesController@massDelete')       ->name('features.mass_delete');
   Route::resource('features', 'FeaturesController');
});



//////////////////////////////////////////////////////////////////////////////
// FRONTEND FEATURES ROUTES
//////////////////////////////////////////////////////////////////////////////


Route::resource('features', 'UI\FeaturesController');