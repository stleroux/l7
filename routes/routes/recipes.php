<?php

//////////////////////////////////////////////////////////////////////////////
// BACKEND RECIPES ROUTES
//////////////////////////////////////////////////////////////////////////////

Route::namespace('Admin\Recipes')->prefix('admin')->name('admin.')->group(function() {
   Route::post('/recipes/restore/{recipe}',        'FunctionsController@restore')               ->name('recipes.restore');
   Route::post('/recipes/mass_restore',            'FunctionsController@massRestore')           ->name('recipes.mass_restore');
   Route::post('/recipes/delete/{recipe}',         'FunctionsController@delete')                ->name('recipes.delete');
   Route::delete('/recipes/mass_delete',           'FunctionsController@massDelete')            ->name('recipes.mass_delete');
   Route::delete('/recipes/mass_destroy',          'FunctionsController@massDestroy')           ->name('recipes.mass_destroy');
   
   Route::post('/recipes/unpublish/{recipe}',      'FunctionsController@unpublish')             ->name('recipes.unpublish');
   Route::post('/recipes/publish/{recipe}',        'FunctionsController@publish')               ->name('recipes.publish');
   
   Route::post('/recipes/mass_publish',            'FunctionsController@massPublish')           ->name('recipes.mass_publish');
   Route::post('/recipes/mass_unpublish',          'FunctionsController@massUnpublish')         ->name('recipes.mass_unpublish');
   Route::post('/recipes/publishAll',              'FunctionsController@publishAll')            ->name('recipes.publishAll');
   Route::post('/recipes/resetViews/{recipe}',     'FunctionsController@resetViews')            ->name('recipes.resetViews');
   Route::post('/recipes/mass_resetViews',         'FunctionsController@massResetViews')        ->name('recipes.mass_resetViews');
   Route::get('/recipes/{id}/printPDF',            'FunctionsController@printPDF')              ->name('recipes.printPDF');
   Route::get('/recipes/{id}/print',               'FunctionsController@print')                 ->name('recipes.print');
   Route::get('/recipes/print/{id}',               'FunctionsController@printAll')              ->name('recipes.printAll');

   Route::get('/recipes/trashed',                  'ExtraViewsController@trashed')              ->name('recipes.trashed');
   Route::get('/recipes/unpublished/{key?}',       'ExtraViewsController@unpublished')          ->name('recipes.unpublished');
   Route::get('/recipes/future/{key?}',            'ExtraViewsController@future')               ->name('recipes.future');
   Route::get('/recipes/newRecipes/{key?}',        'ExtraViewsController@newRecipes')           ->name('recipes.newRecipes');

   Route::resource('recipes',                      'RecipesController');
});


//////////////////////////////////////////////////////////////////////////////
// FRONTEND RECIPES ROUTES
//////////////////////////////////////////////////////////////////////////////

Route::namespace('UI\Recipes')->prefix('recipes')->name('recipes.')->group(function() {
   Route::get('{recipe}/show',                     'RecipesController@show')                    ->name('show');
   Route::get('faq',                               'RecipesController@faq')                     ->name('faq');
   Route::get('indexGrid/{cat?}/{key?}',           'RecipesController@indexGrid')               ->name('indexGrid');
   Route::get('indexList/{cat?}/{key?}',           'RecipesController@indexList')               ->name('indexList');
   Route::get('myRecipesGrid/{cat?}/{key?}',       'RecipesController@myRecipesGrid')           ->name('myRecipesGrid');
   Route::get('myRecipesList/{cat?}/{key?}',       'RecipesController@myRecipesList')           ->name('myRecipesList');
   Route::get('privateRecipesList/{cat?}/{key?}',  'RecipesController@privateRecipesList')      ->name('privateRecipesList');
   Route::get('privateRecipesGrid/{cat?}/{key?}',  'RecipesController@privateRecipesGrid')      ->name('privateRecipesGrid');
   Route::get('favoriteRecipesGrid/{cat?}/{key?}', 'RecipesController@favoriteRecipesGrid')     ->name('favoriteRecipesGrid');
   Route::get('favoriteRecipesList/{cat?}/{key?}', 'RecipesController@favoriteRecipesList')     ->name('favoriteRecipesList');
   Route::get('archives/{year}/{month}',           'RecipesController@archives')                ->name('archives');
   
   Route::get('{id}/printPDF',                     'FunctionsController@printPDF')              ->name('printPDF');
   Route::get('{id}/print',                        'FunctionsController@print')                 ->name('print');
   Route::get('print/{id}',                        'FunctionsController@printAll')              ->name('printAll');
   Route::get('{id}/favoriteAdd',                  'FunctionsController@favoriteAdd')           ->name('favoriteAdd');
   Route::get('{id}/favoriteRemove',               'FunctionsController@favoriteRemove')        ->name('favoriteRemove');
   Route::get('{id}/publicize',                    'FunctionsController@publicize')             ->name('publicize');
   Route::get('{id}/privatize',                    'FunctionsController@privatize')             ->name('privatize');
   Route::post('{id}/storeComment',                'FunctionsController@storeComment')          ->name('storeComment');
});
