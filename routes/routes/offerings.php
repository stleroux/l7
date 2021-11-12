<?php

//////////////////////////////////////////////////////////////////////////////
// BACKEND FAQS ROUTES
//////////////////////////////////////////////////////////////////////////////

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function() {
   Route::post('/offerings/restore/{faq}',           'OfferingsController@restore')             ->name('offerings.restore');
   Route::post('/offerings/mass_restore',            'OfferingsController@massRestore')         ->name('offerings.mass_restore');
   Route::post('/offerings/delete/{faq}',            'OfferingsController@delete')              ->name('offerings.delete');
   Route::delete('/offerings/mass_delete',           'OfferingsController@massDelete')          ->name('offerings.mass_delete');
   Route::delete('/offerings/mass_destroy',          'OfferingsController@massDestroy')         ->name('offerings.mass_destroy');

   Route::post('/offerings/unpublish/{faq}',         'OfferingsController@unpublish')           ->name('offerings.unpublish');
   Route::post('/offerings/publish/{faq}',           'OfferingsController@publish')             ->name('offerings.publish');
   Route::post('/offerings/mass_publish',            'OfferingsController@massPublish')         ->name('offerings.mass_publish');
   Route::post('/offerings/mass_unpublish',          'OfferingsController@massUnpublish')       ->name('offerings.mass_unpublish');

   Route::get('/offerings/trashed',                  'OfferingsController@trashed')             ->name('offerings.trashed');
   Route::post('/offerings/resetViews/{faq}',        'OfferingsController@resetViews')          ->name('offerings.resetViews');
   Route::post('/offerings/mass_resetViews',         'OfferingsController@massResetViews')      ->name('offerings.mass_resetViews');
   Route::resource('offerings',                      'OfferingsController');
});


//////////////////////////////////////////////////////////////////////////////
// FRONTEND FAQS ROUTES
//////////////////////////////////////////////////////////////////////////////

Route::namespace('UI')->prefix('offerings')->name('offerings.')->group(function() {
//    // Route::get('{offering}/show',                'OfferingsController@show')                ->name('show');
   Route::get('',                       'OfferingsController@index')                 ->name('index');
//    // Route::get('{filter?}/{tag?}',               'OfferingsController@index')               ->name('index');
//    // Route::post('{offering}/comment',            'CommentController@store')            ->name('comment.store');
});