<?php

//////////////////////////////////////////////////////////////////////////////
// BACKEND TAGS ROUTES
//////////////////////////////////////////////////////////////////////////////

// Route::get('UI/tags/{slug}',                 'BlogController@show')                   ->name('tags.show');

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function() {
   Route::get('tags/restore/{role}',        'TagsController@restore')          ->name('tags.restore');
   Route::post('tags/delete/{role}',        'TagsController@delete')           ->name('tags.delete');
   Route::delete('tags/mass_destroy',       'TagsController@massDestroy')      ->name('tags.mass_destroy');
   Route::post('tags/mass_restore',         'TagsController@massRestore')      ->name('tags.mass_restore');
   Route::delete('tags/mass_delete',        'TagsController@massDelete')       ->name('tags.mass_delete');
   Route::get('tags/trashed',               'TagsController@trashed')          ->name('tags.trashed');
   Route::get('tags/noPermissions',         'TagsController@noPermissions')    ->name('tags.noPermissions');
   Route::get('tags/addAllPerms/{role}',    'TagsController@addAllPerms')      ->name('tags.addAllPerms');
   Route::get('tags/removeAllPerms/{role}', 'TagsController@removeAllPerms')   ->name('tags.removeAllPerms');
   Route::resource('tags',                  'TagsController');
});