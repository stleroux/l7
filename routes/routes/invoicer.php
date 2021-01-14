<?php

// Route::namespace('Admin\Recipes')->prefix('admin/recipes')->name('admin.recipes.')->group(function() {
   Route::get('admin/invoicer',                       'Admin\Invoicer\DashboardController@index')              ->name('admin.invoicer');

Route::prefix('admin/invoicer')->namespace('Admin\Invoicer')->name('admin.invoicer.')->group(function() {

   // Route::get('/',                                    'InvoicerController@index')               ->name('index');

   Route::get('ledger',                               'LedgerController@index')                 ->name('ledger');
   Route::get('ledger/paid',                          'LedgerController@paid')                  ->name('ledger.paid');
   Route::get('ledger/unpaid',                        'LedgerController@unpaid')                ->name('ledger.unpaid');
   Route::get('ledger/invoiced',                      'LedgerController@invoiced')              ->name('ledger.invoiced');
   Route::get('ledger/logged',                        'LedgerController@logged')                ->name('ledger.logged');
});



Route::prefix('admin/invoicer')->namespace('Admin\Invoicer')->name('admin.invoicer.invoices.')->group(function() {
   Route::get('invoices/{inv_id}/downloadPDFInvoice', 'InvoicesController@downloadPDFInvoice')  ->name('downloadPDFInvoice');
   Route::get('invoices/{inv_id}/PDF',                'InvoicesController@PDF')                 ->name('PDF');
   Route::get('invoices/{inv_id}/status_invoiced',    'InvoicesController@status_invoiced')     ->name('status_invoiced');
   Route::get('invoices/{inv_id}/status_paid',        'InvoicesController@status_paid')         ->name('status_paid');
   Route::get('invoices/status_invoiced_all',         'InvoicesController@status_invoiced_all') ->name('status_invoiced_all');
   Route::get('invoices/status_paid_all',             'InvoicesController@status_paid_all')     ->name('status_paid_all');
   Route::get('invoices/paid',                        'InvoicesController@paid')                ->name('paid');
   Route::get('invoices/unpaid',                      'InvoicesController@unpaid')              ->name('unpaid');
   Route::get('invoices/invoiced',                    'InvoicesController@invoiced')            ->name('invoiced');
   Route::get('invoices/logged',                      'InvoicesController@logged')              ->name('logged');
});

Route::prefix('admin/invoicer')->namespace('Admin\Invoicer')->name('admin.invoicer.')->group(function() {
   Route::get('activities',                             'ActivitiesController@index')              ->name('activities');
   Route::get('activities/create/{id?}',                'ActivitiesController@create')             ->name('activities.create');
   // Route::get('activities/receivePayment/{id?}',        'ActivitiesController@receivePayment')     ->name('activities.receivePayment');
   // Route::get('activities/applyDeposit/{id?}',          'ActivitiesController@applyDeposit')       ->name('activities.applyDeposit');
   // Route::get('activities/apllyDiscount/{id?}',         'ActivitiesController@applyDiscount')      ->name('activities.applyDiscount');
   Route::post('activities/store',                      'ActivitiesController@store')              ->name('activities.store');
   // Route::post('activities/storePayment',               'ActivitiesController@storePayment')       ->name('activities.storePayment');
   // Route::post('activities/storeDiscount',              'ActivitiesController@storeDiscount')      ->name('activities.storeDiscount');
   // Route::get('activities/{id}',                        'ActivitiesController@show')                ->name('activities.show');
   Route::get('activities/{id}/edit',                   'ActivitiesController@edit')                ->name('activities.edit');
   Route::put('activities/{id}',                        'ActivitiesController@update')              ->name('activities.update');
   Route::delete('activities/{id}',                     'ActivitiesController@destroy')             ->name('activities.destroy');
});


Route::prefix('admin/invoicer')->namespace('Admin\Invoicer')->name('admin.invoicer.')->group(function() {
   Route::get('invoices',                             'InvoicesController@index')               ->name('invoices');
   Route::get('invoices/create/{id?}',                'InvoicesController@create')              ->name('invoices.create');
   Route::post('invoices/store',                      'InvoicesController@store')               ->name('invoices.store');
   Route::get('invoices/{id}',                        'InvoicesController@show')                ->name('invoices.show');
   Route::get('invoices/{id}/edit',                   'InvoicesController@edit')                ->name('invoices.edit');
   Route::put('invoices/{id}',                        'InvoicesController@update')              ->name('invoices.update');
   Route::delete('invoices/{id}',                     'InvoicesController@destroy')             ->name('invoices.destroy');
});


Route::prefix('admin/invoicer')->namespace('Admin\Invoicer')->name('admin.invoicer.')->group(function() {
   Route::get('clients/search',                       'ClientsController@search')               ->name('clients.search');
   Route::get('clients',                              'ClientsController@index')                ->name('clients');
   Route::get('clients/create',                       'ClientsController@create')               ->name('clients.create');
   Route::post('clients/store',                       'ClientsController@store')                ->name('clients.store');
   Route::get('clients/{id}',                         'ClientsController@show')                 ->name('clients.show');
   Route::get('clients/{id}/edit',                    'ClientsController@edit')                 ->name('clients.edit');
   Route::put('clients/{id}',                         'ClientsController@update')               ->name('clients.update');
   Route::delete('clients/{id}',                      'ClientsController@destroy')              ->name('clients.destroy');
});


Route::prefix('admin/invoicer')->namespace('Admin\Invoicer')->name('admin.invoicer.')->group(function() {
   Route::get('/invoiceItems/{inv_id}/create',        'InvoiceItemsController@create')          ->name('invoiceItems.create');
   Route::resource('/invoiceItems',                   'InvoiceItemsController',                 ['except' => ['create','show']]);

   Route::get('products/search',                      'ProductsController@search')              ->name('products.search');
   Route::get('products',                             'ProductsController@index')               ->name('products');
   Route::get('products/create',                      'ProductsController@create')              ->name('products.create');
   Route::post('products/store',                      'ProductsController@store')               ->name('products.store');
   Route::get('products/{id}',                        'ProductsController@show')                ->name('products.show');
   Route::get('products/{id}/edit',                   'ProductsController@edit')                ->name('products.edit');
   Route::put('products/{id}',                        'ProductsController@update')              ->name('products.update');
   Route::delete('products/{id}',                     'ProductsController@destroy')             ->name('products.destroy');

});
