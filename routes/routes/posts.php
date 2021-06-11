<?php

//////////////////////////////////////////////////////////////////////////////
// BACKEND POST ROUTES
//////////////////////////////////////////////////////////////////////////////

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

   Route::get('posts/deleteImage/{id}',            'FunctionsController@deleteImage')      ->name('posts.deleteImage');

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
