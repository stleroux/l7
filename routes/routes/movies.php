<?php

////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// BACKEND MOVIES ROUTES
////////////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::namespace('Admin\Movies')->prefix('admin/movies')->name('admin.movies.')->group(function() {

	Route::get('archives/{year}/{month}',  'ExtraViewsController@archives')     		   ->name('archives');
	Route::post('search',                  'FunctionsController@search')     		      ->name('search');
	Route::get('trashed/{key?}',    			'ExtraViewsController@trashed')        		->name('trashed');
	Route::post('restore/{movie}',         'FunctionsController@restore')               ->name('restore');
   Route::post('mass_restore',            'FunctionsController@massRestore')           ->name('mass_restore');
   Route::post('delete/{movie}',          'FunctionsController@delete')                ->name('delete');
   Route::delete('mass_delete',           'FunctionsController@massDelete')            ->name('mass_delete');
	Route::delete('mass_destroy',          'FunctionsController@massDestroy')           ->name('mass_destroy');
	Route::post('resetViews/{movie}',      'FunctionsController@resetViews')            ->name('resetViews');
   Route::post('mass_resetViews',         'FunctionsController@massResetViews')        ->name('mass_resetViews');

	Route::get('{id}/show',                'MoviesController@show')               		->name('show');
	Route::get('create',     			   	'MoviesController@create')         				->name('create');
	Route::get('{key?}',                   'MoviesController@index')              		->name('index');
	Route::post('',            			   'MoviesController@store')          				->name('store');
	Route::get('{id}/edit', 			      'MoviesController@edit')           				->name('edit');
	Route::put('{id}',         			   'MoviesController@update')         				->name('update');
	Route::delete('{movie}',    				'MoviesController@destroy')  						->name('destroy');

});
