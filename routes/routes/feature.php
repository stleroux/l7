<?php

Route::prefix('admin')->namespace('Admin')->name('admin.')->group(function() {

	// Generate routes base don options in Model
foreach(App\Models\Feature::statusOptions() as $statusOptionKey => $statusOptionValue) {
	Route::get(
		'features/' . strtolower(str_replace(" ", "", $statusOptionValue)),
		'FeaturesController@' . strtolower(str_replace(" ", "", $statusOptionValue)))
		 ->name('features.' . strtolower(str_replace(" ", "", $statusOptionValue)));
}

	Route::get('features/trashed',		         'FeaturesController@trashed')          ->name('features.trashed');
	Route::get('features/trashedShow',		      'FeaturesController@trashedShow')      ->name('features.trashedShow');
	Route::get('features/restore/{bug}',         'FeaturesController@restore')          ->name('features.restore');
   Route::post('features/delete/{bug}',         'FeaturesController@delete')           ->name('features.delete');
   Route::delete('features/mass_destroy',       'FeaturesController@massDestroy')      ->name('features.mass_destroy');
   Route::post('features/mass_restore',         'FeaturesController@massRestore')      ->name('features.mass_restore');
   Route::delete('features/mass_delete',        'FeaturesController@massDelete')       ->name('features.mass_delete');
   Route::resource('features', 'FeaturesController');
});

Route::resource('features', 'UI\FeaturesController');