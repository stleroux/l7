<?php

//////////////////////////////////////////////////////////////////////////////
// CARVINGS ROUTES
//////////////////////////////////////////////////////////////////////////////
Route::namespace('Admin\Carvings')->prefix('admin')->name('admin.')->group(function() {
   Route::post('/carvings/{carving}/image',              'ImageController@store')                  ->name('carvings.image.store');
   Route::put('/carvings/{image}/image',                 'ImageController@update')                 ->name('carvings.image.update');
   Route::delete('/carvings/{carving}/image',            'ImageController@destroy')                ->name('carvings.image.delete');

   Route::post('/carvings/{carving}/material',           'MaterialController@store')               ->name('carvings.material.store');
   Route::delete('/carvings/{carving}/material',         'MaterialController@destroy')             ->name('carvings.material.delete');

   Route::post('/carvings/{carving}/finish',             'FinishController@store')                 ->name('carvings.finish.store');
   Route::delete('/carvings/{carving}/finish',           'FinishController@destroy')               ->name('carvings.finish.delete');

   Route::post('/carvings/restore/{carving}',            'CarvingsController@restore')             ->name('carvings.restore');
   Route::post('/carvings/mass_restore',                 'CarvingsController@massRestore')         ->name('carvings.mass_restore');
   Route::post('/carvings/delete/{carving}',             'CarvingsController@delete')              ->name('carvings.delete');
   Route::delete('/carvings/mass_delete',                'CarvingsController@massDelete')          ->name('carvings.mass_delete');
   Route::delete('/carvings/mass_destroy',               'CarvingsController@massDestroy')         ->name('carvings.mass_destroy');
   Route::get('/carvings/trashed',                       'CarvingsController@trashed')             ->name('carvings.trashed');

   Route::post('/carvings/resetViews/{carving}',         'CarvingsController@resetViews')          ->name('carvings.resetViews');
   Route::post('/carvings/mass_resetViews',              'CarvingsController@massResetViews')      ->name('carvings.mass_resetViews');

   Route::resource('carvings',                           'CarvingsController');
});



//////////////////////////////////////////////////////////////////////////////
// FRONTEND CARVINGS ROUTES
//////////////////////////////////////////////////////////////////////////////

Route::namespace('UI\Carvings')->prefix('carvings')->name('carvings.')->group(function() {
   Route::get('{carving}/show',                 'CarvingsController@show')                   ->name('show');
   Route::get('faq',                            'CarvingsController@faq')                    ->name('faq');
   Route::get('{filter?}/{tag?}',               'CarvingsController@index')                  ->name('index');
   Route::post('{carving}/comment',             'CommentController@store')                   ->name('comment.store');
});