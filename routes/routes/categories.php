<?php

//////////////////////////////////////////////////////////////////////////////
// BACKEND CATEGORIES ROUTES
//////////////////////////////////////////////////////////////////////////////

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function() {
   Route::post('categories/restore/{category}','CategoriesController@restore')        ->name('categories.restore');
   Route::post('categories/delete/{category}', 'CategoriesController@delete')         ->name('categories.delete');
   Route::delete('categories/mass_destroy',    'CategoriesController@massDestroy')    ->name('categories.mass_destroy');
   Route::post('categories/mass_restore',      'CategoriesController@massRestore')    ->name('categories.mass_restore');
   Route::delete('categories/mass_delete',     'CategoriesController@massDelete')     ->name('categories.mass_delete');
   Route::get('categories/trashed',            'CategoriesController@trashed')        ->name('categories.trashed');
   Route::get('categories/noPermissions',      'CategoriesController@noPermissions')  ->name('categories.noPermissions');
   Route::resource('categories',               'CategoriesController');
});

Route::get('/ajax-subcat',function () {
   $cat_id = Request::input('cat_id');
   $subcategories = DB::table('categories')->where('parent_id','=',$cat_id)->orderBy('name')->pluck('name');
   return Response::json($subcategories);
});
