<?php

//////////////////////////////////////////////////////////////////////////////
// BACKEND FAQS ROUTES
//////////////////////////////////////////////////////////////////////////////

Route::namespace('Admin\Faqs')->prefix('admin')->name('admin.')->group(function() {
   Route::post('/faqs/restore/{faq}',           'FaqsController@restore')             ->name('faqs.restore');
   Route::post('/faqs/mass_restore',            'FaqsController@massRestore')         ->name('faqs.mass_restore');
   Route::post('/faqs/delete/{faq}',            'FaqsController@delete')              ->name('faqs.delete');
   Route::delete('/faqs/mass_delete',           'FaqsController@massDelete')          ->name('faqs.mass_delete');
   Route::delete('/faqs/mass_destroy',          'FaqsController@massDestroy')         ->name('faqs.mass_destroy');
   Route::get('/faqs/trashed',                  'FaqsController@trashed')             ->name('faqs.trashed');
   Route::post('/faqs/resetViews/{faq}',        'FaqsController@resetViews')          ->name('faqs.resetViews');
   Route::post('/faqs/mass_resetViews',         'FaqsController@massResetViews')      ->name('faqs.mass_resetViews');
   Route::resource('faqs',                      'FaqsController');
});


//////////////////////////////////////////////////////////////////////////////
// FRONTEND FAQS ROUTES
//////////////////////////////////////////////////////////////////////////////

Route::namespace('UI\Faqs')->prefix('faqs')->name('faqs.')->group(function() {
   Route::get('{faq}/show',                     'FaqsController@show')                ->name('show');
   Route::get('faq',                            'FaqsController@faq')                 ->name('faq');
   Route::get('{filter?}/{tag?}',               'FaqsController@index')               ->name('index');
   Route::post('{faq}/comment',                 'CommentController@store')            ->name('comment.store');
});