<?php


//////////////////////////////////////////////////////////////////////////////
// FRONTEND BLOG ROUTES
//////////////////////////////////////////////////////////////////////////////

Route::prefix('blog')->namespace('UI')->name('blog.')->group(function() {
   Route::get('faq',                    'BlogController@faq')                    ->name('faq');
   Route::post('search',                'BlogController@search')                 ->name('search');
   Route::get('print/{id}',             'BlogController@print')                  ->name('print');
   Route::get('viewImage/{id}',         'BlogController@viewImage')              ->name('viewImage');
   Route::get('{year}/{month}',         'BlogController@archive')                ->name('archive');
   Route::post('{id}/storeComment',     'BlogController@storeComment')           ->name('storeComment');
   Route::get('{slug}',                 'BlogController@show')                   ->name('show')->where('slug', '[\w\d\-\_]+');
   Route::get('',                       'BlogController@getIndex')               ->name('index');
});