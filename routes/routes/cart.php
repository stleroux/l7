<?php

// Route::namespace('UI')->prefix('cart')->name('cart.')->group(function() {
   Route::post('cart/createQuote/',      'UI\CartController@createQuote')        ->name('cart.createQuote');
   // Route::get('cart/requestQuote/',      'UI\CartController@getRequestQuote')    ->name('cart.getRequestQuote');
   Route::post('cart/requestQuote/',     'UI\CartController@requestQuote')      ->name('cart.requestQuote');

   Route::get('cart',                    'UI\CartController@index')              ->name('cart');
   Route::post('cart/{carving}',         'UI\CartController@store')              ->name('cart.store');
   Route::get('cart/destroy',            'UI\CartController@destroy')            ->name('cart.destroy');
   Route::get('cart/update/{rowId}',     'UI\CartController@update')             ->name('cart.update');
   Route::get('cart/remove/{rowId}',     'UI\CartController@remove')             ->name('cart.remove');
   

// });