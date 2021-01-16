<?php

// Route::post('/faqs/{faq}/image',              'Admin\Carvings\ImageController@store')              ->name('faqs.image.store');
// Route::put('/faqs/{image}/image',                 'Admin\Carvings\ImageController@update')             ->name('faqs.image.update');
// Route::delete('/faqs/{faq}/image',            'Admin\Carvings\ImageController@destroy')            ->name('faqs.image.delete');

// Route::post('/faqs/{faq}/material',           'Admin\Carvings\MaterialController@store')           ->name('faqs.material.store');
// Route::delete('/faqs/{faq}/material',         'Admin\Carvings\MaterialController@destroy')         ->name('faqs.material.delete');

// Route::post('/faqs/{faq}/finish',             'Admin\Carvings\FinishController@store')             ->name('faqs.finish.store');
// Route::delete('/faqs/{faq}/finish',           'Admin\Carvings\FinishController@destroy')           ->name('faqs.finish.delete');

//////////////////////////////////////////////////////////////////////////////
// FAQS ROUTES
//////////////////////////////////////////////////////////////////////////////
Route::namespace('Admin\Faqs')->prefix('admin')->name('admin.')->group(function() {
   Route::post('/faqs/restore/{faq}',           'FaqsController@restore')             ->name('faqs.restore');
   Route::post('/faqs/mass_restore',            'FaqsController@massRestore')         ->name('faqs.mass_restore');
   Route::post('/faqs/delete/{faq}',            'FaqsController@delete')              ->name('faqs.delete');
   Route::delete('/faqs/mass_delete',           'FaqsController@massDelete')          ->name('faqs.mass_delete');
   Route::delete('/faqs/mass_destroy',          'FaqsController@massDestroy')         ->name('faqs.mass_destroy');
   Route::get('/faqs/trashed',                  'FaqsController@trashed')             ->name('faqs.trashed');
   // Route::get('{filter?}',          'Projects\ProjectsController@index')               ->name('index');

   Route::post('/faqs/resetViews/{faq}',        'FaqsController@resetViews')          ->name('faqs.resetViews');
   Route::post('/faqs/mass_resetViews',         'FaqsController@massResetViews')      ->name('faqs.mass_resetViews');

   Route::resource('faqs',                      'FaqsController');
});

Route::namespace('UI\Faqs')->prefix('faqs')->name('faqs.')->group(function() {
   Route::get('{faq}/show',                     'FaqsController@show')                ->name('show');
   Route::get('faq',                            'FaqsController@faq')                 ->name('faq');
   Route::get('{filter?}/{tag?}',               'FaqsController@index')               ->name('index');
   Route::post('{faq}/comment',                 'CommentController@store')            ->name('comment.store');
});