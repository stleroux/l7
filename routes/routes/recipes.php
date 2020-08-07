<?php

// Route::namespace('Admin\Recipes')->prefix('admin/recipes')->name('admin.recipes.')->group(function() {
//    Route::get('future/{key?}',            'ExtraViewsController@future')         ->name('future');
//    Route::get('newRecipes/{key?}',        'ExtraViewsController@newRecipes')     ->name('newRecipes');
//    Route::get('unpublished/{key?}',       'ExtraViewsController@unpublished')    ->name('unpublished');
//    Route::get('trashed/{key?}',           'ExtraViewsController@trashed')        ->name('trashed');
//    Route::get('{id}/show',                'RecipesController@show')              ->name('show');
//    Route::get('{id}/trash',               'FunctionsController@trash')           ->name('trash');
//    Route::get('{id}/delete',              'RecipesController@delete')            ->name('delete');
//    Route::delete('{id}/deleteDestroy',    'RecipesController@deleteDestroy')     ->name('deleteDestroy');
//    Route::get('create',                   'RecipesController@create')            ->name('create');
//    Route::post('store',                   'RecipesController@store')             ->name('store');
//    Route::get('{id}/edit',                'RecipesController@edit')              ->name('edit');
//    Route::put('{id}',                     'RecipesController@update')            ->name('update');
//    Route::get('{id}/publish',             'FunctionsController@publish')         ->name('publish');
//    Route::get('{id}/resetViews',          'FunctionsController@resetViews')      ->name('resetViews');
//    Route::post('publishAll',              'FunctionsController@publishAll')      ->name('publishAll');
//    Route::get('{id}/unpublish',           'FunctionsController@unpublish')       ->name('unpublish');
//    Route::post('unpublishAll',            'FunctionsController@unpublishAll')    ->name('unpublishAll');
//    Route::get('{id}/restore',             'FunctionsController@restore')         ->name('restore');
//    Route::post('restoreAll',              'FunctionsController@restoreAll')      ->name('restoreAll');
//    Route::get('{id}/showTrashed',         'RecipesController@showTrashed')       ->name('showTrashed');
//    // Route::delete('{id}',                  'RecipesController@destroy')              ->name('recipes.destroy');

//    Route::get('{id}/trash',               'FunctionsController@trash')           ->name('trash');
//    Route::delete('{id}/trashDestroy',     'FunctionsController@trashDestroy')    ->name('trashDestroy');
//    Route::post('trashAll',                'FunctionsController@trashAll')        ->name('trashAll');
//    Route::post('deleteAll',               'RecipesController@deleteAll')         ->name('deleteAll');
//    Route::get('{id}/duplicate',           'FunctionsController@duplicate')       ->name('duplicate');
//    // Route::get('import',                   'RecipesController@import')               ->name('recipes.import');
//    // Route::get('pdfview',                  'RecipesController@pdfview')              ->name('recipes.pdfview');
//    // Route::post('importExcel',             'RecipesController@importExcel')          ->name('recipes.importExport');
//    // Route::get('downloadExcel/{type}',     'RecipesController@downloadExcel')        ->name('recipes.downloadExcel');
//    Route::get('{key?}',                   'RecipesController@index')             ->name('index');
//    // Make sure this one stays last as it will catch everything else
//    Route::get('archives/{year}/{month}',  'ExtraViewsController@archives')       ->name('archives');
// });

Route::namespace('UI\Recipes')->prefix('recipes')->name('recipes.')->group(function() {
//    Route::get('{id}/show/{byCatName?}',   'RecipesController@show')                    ->name('show');
//    Route::get('{id}/printPDF',            'FunctionsController@printPDF')              ->name('printPDF');
//    Route::get('{id}/print',               'FunctionsController@print')                 ->name('print');
   Route::get('print/{id}',               'FunctionsController@printAll')              ->name('printAll');
//    Route::get('{id}/favoriteAdd',         'FunctionsController@favoriteAdd')           ->name('favoriteAdd');
//    Route::get('{id}/favoriteRemove',      'FunctionsController@favoriteRemove')        ->name('favoriteRemove');
//    Route::get('{id}/publicize',           'FunctionsController@publicize')             ->name('publicize');
//    Route::get('{id}/privatize',           'FunctionsController@privatize')             ->name('privatize');
//    Route::post('{id}/storeComment',       'FunctionsController@storeComment')          ->name('storeComment');


//    // Route::get('myFavoriteRecipes/{key?}', 'RecipesController@myFavoriteRecipes')       ->name('myFavoriteRecipes');
//    Route::get('favoriteRecipesGrid/{cat?}/{key?}', 'RecipesController@favoriteRecipesGrid')       ->name('favoriteRecipesGrid');
//    Route::get('favoriteRecipesList/{cat?}/{key?}', 'RecipesController@favoriteRecipesList')       ->name('favoriteRecipesList');
   
//    // Route::get('myPrivateRecipes/{key?}',  'RecipesController@myPrivateRecipes')        ->name('myPrivateRecipes');
//    Route::get('privateRecipesGrid/{cat?}/{key?}',  'RecipesController@privateRecipesGrid')        ->name('privateRecipesGrid');
//    Route::get('privateRecipesList/{cat?}/{key?}',  'RecipesController@privateRecipesList')        ->name('privateRecipesList');

//    // Route::get('myRecipes/{key?}',         'RecipesController@myRecipes')               ->name('myRecipes');
//    Route::get('myRecipesGrid/{cat?}/{key?}',     'RecipesController@myRecipesGrid')           ->name('myRecipesGrid');
//    Route::get('myRecipesList/{cat?}/{key?}',     'RecipesController@myRecipesList')           ->name('myRecipesList');
   
//    // Route::get('{cat?}/{key?}',            'RecipesController@index')                   ->name('index');
//    Route::get('indexGrid/{cat?}/{key?}',  'RecipesController@indexGrid')               ->name('indexGrid');
//    Route::get('indexList/{cat?}/{key?}',  'RecipesController@indexList')               ->name('indexList');



//    Route::get('archives/{year}/{month}',  'RecipesController@archives')                ->name('archives');
});

//////////////////////////////////////////////////////////////////////////////
// PROJECTS ROUTES
//////////////////////////////////////////////////////////////////////////////
Route::namespace('Admin\Recipes')->prefix('admin')->name('admin.')->group(function() {
   Route::get('/recipes/{recipe}/restore',   'RecipesController@restore')             ->name('recipes.restore');
   Route::post('/recipes/mass_restore',      'RecipesController@massRestore')         ->name('recipes.mass_restore');
   Route::post('/recipes/delete/{redipe}',   'RecipesController@delete')              ->name('recipes.delete');
   Route::delete('/recipes/mass_delete',     'RecipesController@massDelete')          ->name('recipes.mass_delete');
   Route::delete('/recipes/mass_destroy',    'RecipesController@massDestroy')         ->name('recipes.mass_destroy');
   Route::get('/recipes/trashed',            'RecipesController@trashed')             ->name('recipes.trashed');
   // Route::get('{filter?}',          'Projects\ProjectsController@index')               ->name('recipes.index');
   Route::get('/recipes/unpublished/{key?}', 'ExtraViewsController@unpublished')    ->name('recipes.unpublished');
   Route::get('/recipes/{id}/unpublish',     'FunctionsController@unpublish')       ->name('recipes.unpublish');
   Route::post('/recipes/unpublishAll',      'FunctionsController@unpublishAll')    ->name('recipes.unpublishAll');
   Route::get('/recipes/future/{key?}',      'ExtraViewsController@future')         ->name('recipes.future');
   Route::get('/recipes/newRecipes/{key?}',  'ExtraViewsController@newRecipes')     ->name('recipes.newRecipes');
   Route::get('/recipes/trashed/{key?}',     'ExtraViewsController@trashed')        ->name('recipes.trashed');
   Route::get('/recipe/{id}/trash',          'FunctionsController@trash')           ->name('recipes.trash');
   Route::post('/recipes/trashAll',          'FunctionsController@trashAll')        ->name('recipes.trashAll');
   Route::resource('recipes',                'RecipesController');
});

// Route::get('/recipes/{project}/show',    'Projects\ProjectsController@show')                   ->name('recipes.show');

Route::namespace('UI\Recipes')->prefix('recipes')->name('recipes.')->group(function() {
   Route::get('{recipe}/show',     'RecipesController@show')                   ->name('show');
   // Route::get('{filter?}',         'RecipesController@index')                  ->name('index');
   Route::get('indexGrid/{cat?}/{key?}',  'RecipesController@indexGrid')               ->name('indexGrid');
   Route::get('indexList/{cat?}/{key?}',  'RecipesController@indexList')               ->name('indexList');
});