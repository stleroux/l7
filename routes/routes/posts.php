<?php

// Route::namespace('Admin\Posts')->prefix('admin/posts')->name('admin.posts.')->group(function() {
//    Route::get('future/{key?}',            'ExtraViewsController@future')         ->name('future');
//    Route::get('newRecipes/{key?}',        'ExtraViewsController@newRecipes')     ->name('newRecipes');
//    Route::get('unpublished/{key?}',       'ExtraViewsController@unpublished')    ->name('unpublished');
   // Route::get('trashed/{key?}',           'ExtraViewsController@trashed')        ->name('trashed');
//    Route::get('{id}/show',                'RecipesController@show')              ->name('show');
//    Route::get('{id}/trash',               'FunctionsController@trash')           ->name('trash');
//    Route::get('{id}/delete',              'RecipesController@delete')            ->name('delete');
//    Route::delete('{id}/deleteDestroy',    'RecipesController@deleteDestroy')     ->name('deleteDestroy');
//    Route::get('create',                   'RecipesController@create')            ->name('create');
//    Route::post('store',                   'RecipesController@store')             ->name('store');
//    Route::get('{id}/edit',                'RecipesController@edit')              ->name('edit');
//    Route::put('{id}',                     'RecipesController@update')            ->name('update');
   // Route::get('{id}/publish',             'FunctionsController@publish')         ->name('publish');
   // Route::post('mass_publish',            'FunctionsController@massPublish')     ->name('mass_publish');
   // Route::post('mass_unpublish',          'FunctionsController@massUnpublish')     ->name('mass_unpublish');
//    Route::get('{id}/resetViews',          'FunctionsController@resetViews')      ->name('resetViews');
   // Route::post('publishAll',              'FunctionsController@publishAll')      ->name('publishAll');
//    Route::get('{id}/unpublish',           'FunctionsController@unpublish')       ->name('unpublish');
//    Route::post('unpublishAll',            'FunctionsController@unpublishAll')    ->name('unpublishAll');
//    Route::get('{id}/restore',             'FunctionsController@restore')         ->name('restore');
//    Route::post('restoreAll',              'FunctionsController@restoreAll')      ->name('restoreAll');
//    Route::get('{id}/showTrashed',         'RecipesController@showTrashed')       ->name('showTrashed');
//    // Route::delete('{id}',                  'RecipesController@destroy')              ->name('posts.destroy');

//    Route::get('{id}/trash',               'FunctionsController@trash')           ->name('trash');
//    Route::delete('{id}/trashDestroy',     'FunctionsController@trashDestroy')    ->name('trashDestroy');
//    Route::post('trashAll',                'FunctionsController@trashAll')        ->name('trashAll');
//    Route::post('deleteAll',               'RecipesController@deleteAll')         ->name('deleteAll');
//    Route::get('{id}/duplicate',           'FunctionsController@duplicate')       ->name('duplicate');
//    // Route::get('import',                   'RecipesController@import')               ->name('posts.import');
//    // Route::get('pdfview',                  'RecipesController@pdfview')              ->name('posts.pdfview');
//    // Route::post('importExcel',             'RecipesController@importExcel')          ->name('posts.importExport');
//    // Route::get('downloadExcel/{type}',     'RecipesController@downloadExcel')        ->name('posts.downloadExcel');
//    Route::get('{key?}',                   'RecipesController@index')             ->name('index');
//    // Make sure this one stays last as it will catch everything else
//    Route::get('archives/{year}/{month}',  'ExtraViewsController@archives')       ->name('archives');
// });

// Route::namespace('UI\Posts')->prefix('posts')->name('posts.')->group(function() {
//    Route::get('{id}/show/{byCatName?}',   'RecipesController@show')                    ->name('show');
   // Route::get('{id}/printPDF',            'FunctionsController@printPDF')              ->name('printPDF');
   // Route::get('{id}/print',               'FunctionsController@print')                 ->name('print');
   // Route::get('print/{id}',               'FunctionsController@printAll')              ->name('printAll');
   // Route::get('{id}/favoriteAdd',         'FunctionsController@favoriteAdd')           ->name('favoriteAdd');
   // Route::get('{id}/favoriteRemove',      'FunctionsController@favoriteRemove')        ->name('favoriteRemove');
   // Route::get('{id}/publicize',           'FunctionsController@publicize')             ->name('publicize');
   // Route::get('{id}/privatize',           'FunctionsController@privatize')             ->name('privatize');
   // Route::post('{id}/storeComment',       'FunctionsController@storeComment')          ->name('storeComment');


//    // Route::get('myFavoriteRecipes/{key?}', 'RecipesController@myFavoriteRecipes')       ->name('myFavoriteRecipes');
//    // Route::get('myPrivateRecipes/{key?}',  'RecipesController@myPrivateRecipes')        ->name('myPrivateRecipes');

//    // Route::get('myRecipes/{key?}',         'RecipesController@myRecipes')               ->name('myRecipes');
   
//    // Route::get('{cat?}/{key?}',            'RecipesController@index')                   ->name('index');
//    Route::get('indexGrid/{cat?}/{key?}',  'RecipesController@indexGrid')               ->name('indexGrid');
//    Route::get('indexList/{cat?}/{key?}',  'RecipesController@indexList')               ->name('indexList');
// });

//////////////////////////////////////////////////////////////////////////////
// PROJECTS ROUTES
//////////////////////////////////////////////////////////////////////////////
   // Route::post('/posts/unpublishAll',      'FunctionsController@unpublishAll')    ->name('posts.unpublishAll');
   // Route::get('/posts/trashed/{key?}',     'ExtraViewsController@trashed')        ->name('posts.trashed');
   // Route::get('/recipe/{id}/trash',          'FunctionsController@trash')           ->name('posts.trash');
   // Route::post('/posts/trashAll',          'FunctionsController@trashAll')        ->name('posts.trashAll');
// Route::namespace('Admin\Posts')->prefix('admin/posts')->name('admin.posts.')->group(function() {
Route::namespace('Admin\Posts')->prefix('admin')->name('admin.')->group(function() {
   
   Route::post('/posts/restore/{post}',               'FunctionsController@restore')               ->name('posts.restore');
   Route::post('/posts/mass_restore',                   'FunctionsController@massRestore')           ->name('posts.mass_restore');
   Route::post('/posts/delete/{post}',                'FunctionsController@delete')                ->name('posts.delete');
   Route::delete('/posts/mass_delete',                  'FunctionsController@massDelete')            ->name('posts.mass_delete');
   Route::delete('/posts/mass_destroy',                 'FunctionsController@massDestroy')           ->name('posts.mass_destroy');
   Route::post('/posts/unpublish/{post}',             'FunctionsController@unpublish')             ->name('posts.unpublish');
   Route::post('/posts/publish/{post}',               'FunctionsController@publish')               ->name('posts.publish');
   Route::post('/posts/mass_publish',                   'FunctionsController@massPublish')           ->name('posts.mass_publish');
   Route::post('/posts/mass_unpublish',                 'FunctionsController@massUnpublish')         ->name('posts.mass_unpublish');
   Route::post('/posts/publishAll',                     'FunctionsController@publishAll')            ->name('posts.publishAll');
   Route::post('/posts/resetViews/{post}',        'FunctionsController@resetViews')            ->name('posts.resetViews');
   Route::post('/posts/mass_resetViews',          'FunctionsController@massResetViews')        ->name('posts.mass_resetViews');

   Route::get('/posts/trashed',                  'ExtraViewsController@trashed')              ->name('posts.trashed');
   Route::get('/posts/unpublished/{key?}',       'ExtraViewsController@unpublished')          ->name('posts.unpublished');
   Route::get('/posts/future/{key?}',            'ExtraViewsController@future')               ->name('posts.future');
   Route::get('/posts/new/{key?}',               'ExtraViewsController@new')                  ->name('posts.new');

   Route::get('/posts/{id}/printPDF',                     'FunctionsController@printPDF')              ->name('posts.printPDF');
   Route::get('/posts/{id}/print',                        'FunctionsController@print')                 ->name('posts.print');
   Route::get('/posts/print/{id}',                        'FunctionsController@printAll')              ->name('posts.printAll');
   Route::get('/posts/{id}/favoriteAdd',                  'FunctionsController@favoriteAdd')           ->name('posts.favoriteAdd');
   Route::get('/posts/{id}/favoriteRemove',               'FunctionsController@favoriteRemove')        ->name('posts.favoriteRemove');
   Route::get('/posts/{id}/publicize',                    'FunctionsController@publicize')             ->name('posts.publicize');
   Route::get('/posts/{id}/privatize',                    'FunctionsController@privatize')             ->name('posts.privatize');
   Route::post('/posts/{id}/storeComment',                'FunctionsController@storeComment')          ->name('posts.storeComment');
   
   Route::resource('posts',                      'PostsController');
});

// Route::get('/posts/{project}/show',    'Projects\ProjectsController@show')                   ->name('posts.show');

// Route::namespace('Admin\Posts')->prefix('admin/posts')->name('admin.posts.')->group(function() {
//    // Route::get('{post}/show',                       'PostsController@show')                    ->name('show');
//    Route::get('indexGrid/{cat?}/{key?}',           'PostsController@indexGrid')               ->name('indexGrid');
//    Route::get('indexList/{cat?}/{key?}',           'PostsController@indexList')               ->name('indexList');
//    Route::get('myPostsGrid/{cat?}/{key?}',         'PostsController@myPostsGrid')               ->name('myPostsGrid');
//    Route::get('myPostsList/{cat?}/{key?}',         'PostsController@myPostsList')               ->name('myPostsList');
//    Route::get('privatePostsList/{cat?}/{key?}',    'PostsController@privatePostsList')          ->name('privatePostsList');
//    Route::get('privatePostsGrid/{cat?}/{key?}',    'PostsController@privatePostsGrid')          ->name('privatePostsGrid');
//    Route::get('favoritePostsGrid/{cat?}/{key?}',   'PostsController@favoritePostsGrid')         ->name('favoritePostsGrid');
//    Route::get('favoritePostsList/{cat?}/{key?}',   'PostsController@favoritePostsList')         ->name('favoritePostsList');
//    Route::get('archives/{year}/{month}',           'PostsController@archives')                  ->name('archives');
// });
   
