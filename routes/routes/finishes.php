<?php

//////////////////////////////////////////////////////////////////////////////
// FINISHES ROUTES
//////////////////////////////////////////////////////////////////////////////

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function() {
   Route::post('/finishes/restore/{finish}',  'FinishesController@restore')             ->name('finishes.restore');
   Route::post('/finishes/mass_restore',      'FinishesController@massRestore')         ->name('finishes.mass_restore');
   Route::post('/finishes/delete/{finish}',   'FinishesController@delete')              ->name('finishes.delete');
   Route::delete('/finishes/mass_delete',     'FinishesController@massDelete')          ->name('finishes.mass_delete');
   Route::delete('/finishes/mass_destroy',    'FinishesController@massDestroy')         ->name('finishes.mass_destroy');
   Route::get('/finishes/trashed',            'FinishesController@trashed')             ->name('finishes.trashed');
   Route::resource('finishes',                'FinishesController');
});
