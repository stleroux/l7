<?php

//////////////////////////////////////////////////////////////////////////////
// BACKEND MATERIALS ROUTES
//////////////////////////////////////////////////////////////////////////////

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function() {
   Route::post('/materials/restore/{material}',  'MaterialsController@restore')             ->name('materials.restore');
   Route::post('/materials/mass_restore',        'MaterialsController@massRestore')         ->name('materials.mass_restore');
   Route::post('/materials/delete/{material}',   'MaterialsController@delete')              ->name('materials.delete');
   Route::delete('/materials/mass_delete',       'MaterialsController@massDelete')          ->name('materials.mass_delete');
   Route::delete('/materials/mass_destroy',      'MaterialsController@massDestroy')         ->name('materials.mass_destroy');
   Route::get('/materials/trashed',              'MaterialsController@trashed')             ->name('materials.trashed');
   Route::resource('materials',                  'MaterialsController');
});
