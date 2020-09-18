<?php

// Route::prefix('blog')->name('blog.')->group(function() {
//    Route::get('search',                 'BlogController@search')                 ->name('search');
//    Route::get('print/{id}',             'BlogController@print')                  ->name('print');
//    Route::get('viewImage/{id}',         'BlogController@viewImage')              ->name('viewImage');
//    Route::get('{year}/{month}',         'BlogController@archive')                ->name('archive');
//    Route::post('{id}/storeComment',     'BlogController@storeComment')           ->name('storeComment');
//    Route::get('{slug}',                 'BlogController@show')                   ->name('show')->where('slug', '[\w\d\-\_]+');
//    Route::get('',                       'BlogController@getIndex')               ->name('index');
// });

Route::prefix('admin/posts')->namespace('Admin\Posts')->name('admin.posts.')->group(function() {
   // Route::get('newPosts/{key?}',                'ExtraViewsController@newPosts')            ->name('newPosts');
   // Route::get('unpublished/{key?}',             'ExtraViewsController@unpublished')         ->name('unpublished');
   // Route::get('futurePosts/{key?}',             'ExtraViewsController@futurePosts')         ->name('futurePosts');
   // Route::get('trashed/{key?}',                 'ExtraViewsController@trashed')             ->name('trashed');
   // Route::get('showTrashed/{id}',               'ExtraViewsController@showTrashed')         ->name('showTrashed');
// });
   Route::get('trashed',                  'ExtraViewsController@trashed')              ->name('trashed');
   Route::get('unpublished/{key?}',       'ExtraViewsController@unpublished')          ->name('unpublished');
   Route::get('future/{key?}',            'ExtraViewsController@future')               ->name('future');
   Route::get('new/{key?}',               'ExtraViewsController@new')                  ->name('new');

// Route::prefix('posts')->name('posts.')->group(function() {
   Route::post('/{id}/publish',                  'FunctionsController@publish')             ->name('publish');
   Route::post('/publishAll',                   'FunctionsController@publishAll')          ->name('publishAll');
   Route::get('/{id}/unpublish',                'FunctionsController@unpublish')           ->name('unpublish');
   // Route::post('/unpublishAll',                 'FunctionsController@unpublishAll')        ->name('unpublishAll');
   Route::post('restore/{id}',                   'FunctionsController@restore')             ->name('restore');
   // Route::post('restoreAll',                    'FunctionsController@restoreAll')          ->name('restoreAll');
   Route::get('showTrashed/{id}',               'FunctionsController@showTrashed')         ->name('showTrashed');
   Route::get('/{id}/deleteImage',              'FunctionsController@deleteImage')         ->name('deleteImage');
   
   // Route::get('/{id}/trash',                    'FunctionsController@trash')               ->name('trash');
   // Route::delete('/trashDestroy/{id}/{page?}',  'FunctionsController@trashDestroy')        ->name('trashDestroy');
   // Route::post('/trashAll',                     'FunctionsController@trashAll')            ->name('trashAll');

   // Route::get('/{id}/delete',                   'PostsController@delete')                  ->name('delete');
   // Route::delete('/{id}/deleteDestroy',         'PostsController@deleteDestroy')           ->name('deleteDestroy');
   // Route::post('/deleteAll',                    'PostsController@deleteAll')               ->name('deleteAll');
// });

   Route::post('/mass_restore',            'FunctionsController@massRestore')           ->name('mass_restore');
   Route::delete('/mass_destroy',          'FunctionsController@massDestroy')           ->name('mass_destroy');
   Route::delete('/mass_delete',           'FunctionsController@massDelete')            ->name('mass_delete');
   Route::post('/mass_publish',            'FunctionsController@massPublish')           ->name('mass_publish');
   Route::post('/mass_unpublish',          'FunctionsController@massUnpublish')         ->name('mass_unpublish');

// Route::prefix('posts')->name('posts.')->group(function() {
   Route::get('/{id}/show',                     'PostsController@show')                   ->name('show');
   Route::get('/create',                        'PostsController@create')                 ->name('create');
   Route::post('/store',                        'PostsController@store')                  ->name('store');
   Route::get('/{key?}',                        'PostsController@index')                  ->name('index');
   Route::get('/{id}/edit',                     'PostsController@edit')                   ->name('edit');
   Route::put('/{id}/update',                   'PostsController@update')                 ->name('update');
   Route::delete('{id}/destroy',                'PostsController@destroy')                ->name('destroy');
});


Route::namespace('UI\Posts')->prefix('posts')->name('posts.')->group(function() {
   Route::get('{id}/printPDF',                     'FunctionsController@printPDF')              ->name('printPDF');
});
