<?php

////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// BACKEND ROUTES
////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// EXTRA VIEWS ROUTES
// Route::namespace('Admin\Movies')->prefix('admin/movies')->name('admin.movies.')->group(function() {
	// Route::get('newMovies/{key?}',         'ExtraViewsController@newMovies')     			->name('newMovies');   
	// Route::get('unpublished/{key?}',       'ExtraViewsController@unpublished')          ->name('unpublished');
	// Route::get('future/{key?}',            'ExtraViewsController@future')               ->name('future');
	// Route::get('showTrashed/{id}',         'ExtraViewsController@showTrashed')          ->name('showTrashed');
	// Route::get('trashed/{key?}',           'ExtraViewsController@trashed')              ->name('trashed');
	// Route::get('archives/{year}/{month}',  'ExtraViewsController@archives')             ->name('archives');
	// Route::get('myMovies/{key?}',          'ExtraViewsController@myMovies')      			->name('myMovies');
// });

// FUNCTIONS ROUTES
// Route::namespace('UI\Movies')->prefix('UI/movies')->name('movies.')->group(function() {
// 	Route::get('{id}/addFavorite',         'FunctionsController@addFavorite')              ->name('addFavorite');
// 	Route::get('{id}/removeFavorite',      'FunctionsController@removeFavorite')           ->name('removeFavorite');
// 	Route::get('{id}/duplicate',           'FunctionsController@duplicate')                ->name('duplicate');
// 	Route::get('{id}/publish',             'FunctionsController@publish')                  ->name('publish');
// 	Route::get('{id}/unpublish',           'FunctionsController@unpublish')                ->name('unpublish');
// 	Route::get('{id}/resetViews',          'FunctionsController@resetViews')               ->name('resetViews');
// 	Route::get('print/{id}',               'FunctionsController@print')                    ->name('print');
// 	Route::get('import',                      'FunctionsController@import')                   ->name('import');
// 	Route::get('downloadExcel/{type}',        'FunctionsController@downloadExcel')            ->name('downloadExcel');
// 	Route::get('restore/{id}',                'FunctionsController@restore')                  ->name('restore');
// 	Route::get('pdfview',                     'FunctionsController@pdfview')                  ->name('pdfview');
// 	Route::post('{id}/storeComment',          'FunctionsController@storeComment')             ->name('storeComment');
// 	Route::post('trashAll',                   'FunctionsController@trashAll')                 ->name('trashAll');
	// Route::get('{id}/trash',                  'FunctionsController@trash')                    ->name('trash');
// 	Route::delete('{id}/trashDestroy',        'FunctionsController@trashDestroy')             ->name('trashDestroy');
// 	Route::post('deleteAll',                  'FunctionsController@deleteAll')                ->name('deleteAll');
// 	Route::post('restoreAll',                 'FunctionsController@restoreAll')               ->name('restoreAll');
// 	Route::post('importExcel',                'FunctionsController@importExcel')              ->name('importExport');
	// Route::post('unpublishAll',               'FunctionsController@unpublishAll')             ->name('unpublishAll');
// 	Route::post('publishAll',                 'FunctionsController@publishAll')               ->name('publishAll');
// 	Route::get('import',                      'FunctionsController@import')                   ->name('import');
// 	// Route::post('search',                     'FunctionsController@search')                   ->name('search');
// });

// CRUD ROUTES
// Route::namespace('UI\Movies')->prefix('movies')->name('movies.')->group(function() {
// 	Route::get('create',          'MoviesController@create')         ->name('create');
// 	Route::post('',               'MoviesController@store')          ->name('store');
// 	Route::get('{id}/edit',       'MoviesController@edit')           ->name('edit');
// 	Route::put('{id}',            'MoviesController@update')         ->name('update');
// 	Route::get('{id}/delete',     'MoviesController@delete')         ->name('delete');
// 	Route::delete('{id}',         'MoviesController@deleteDestroy')  ->name('deleteDestroy');
// 	Route::get('{id}/show',       'MoviesController@show')           ->name('show');
// 	Route::get('{key?}',          'MoviesController@index')          ->name('index');
// });

////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// FRONTEND ROUTES
////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::namespace('Admin\Movies')->prefix('admin/movies')->name('admin.movies.')->group(function() {

	// Route::get('newMovies/{key?}',         'ExtraViewsController@newMovies')     	->name('newMovies');
	// Route::get('unpublished/{key?}',       'ExtraViewsController@unpublished')    ->name('unpublished');
	// Route::get('future/{key?}',            'ExtraViewsController@future')         ->name('future');
	// Route::get('showTrashed/{id}',         'ExtraViewsController@showTrashed')    ->name('showTrashed');
	// Route::get('trashed/{key?}',           'ExtraViewsController@trashed')        ->name('trashed');
	// Route::get('archives/{year}/{month}',  'ExtraViewsController@archives')       ->name('archives');
	// Route::get('myMovies/{key?}',          'ExtraViewsController@myMovies')      	->name('myMovies');
	// Route::get('myFavorites',              'ExtraViewsController@myFavorites')    ->name('myFavorites');
	Route::get('archives/{year}/{month}',  'ExtraViewsController@archives')       ->name('archives');

	// Route::get('{id}/favoriteAdd',         'FunctionsController@favoriteAdd')     ->name('favoriteAdd');
	// Route::get('{id}/favoriteRemove',      'FunctionsController@favoriteRemove')  ->name('favoriteRemove');
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