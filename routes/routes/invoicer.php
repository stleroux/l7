<?php

//////////////////////////////////////////////////////////////////////////////
// BACKEND INVOICER ROUTES
//////////////////////////////////////////////////////////////////////////////

Route::get('admin/invoicer',  'Admin\Invoicer\DashboardController@index')->name('admin.invoicer');

Route::prefix('admin/invoicer')->namespace('Admin\Invoicer')->name('admin.invoicer.')->group(function() {

   //////////////////////////////////////////////////////////////////////////////
   // LEDGER ROUTES
   //////////////////////////////////////////////////////////////////////////////
   Route::get('ledger',                               'LedgerController@index')                 ->name('ledger');
   Route::get('ledger/paid',                          'LedgerController@paid')                  ->name('ledger.paid');
   Route::get('ledger/unpaid',                        'LedgerController@unpaid')                ->name('ledger.unpaid');
   Route::get('ledger/invoiced',                      'LedgerController@invoiced')              ->name('ledger.invoiced');
   Route::get('ledger/logged',                        'LedgerController@logged')                ->name('ledger.logged');
   Route::get('ledger/estimates',                     'LedgerController@estimates')             ->name('ledger.estimates');

   //////////////////////////////////////////////////////////////////////////////
   // INVOICES ROUTES
   //////////////////////////////////////////////////////////////////////////////
   Route::get('invoices/{inv_id}/downloadPDFInvoice', 'InvoicesController@downloadPDFInvoice')  ->name('invoices.downloadPDFInvoice');
   Route::get('invoices/{inv_id}/PDF',                'InvoicesController@PDF')                 ->name('invoices.PDF');
   Route::get('invoices/{inv_id}/status_invoiced',    'InvoicesController@status_invoiced')     ->name('invoices.status_invoiced');
   Route::get('invoices/{inv_id}/status_paid',        'InvoicesController@status_paid')         ->name('invoices.status_paid');
   Route::get('invoices/status_invoiced_all',         'InvoicesController@status_invoiced_all') ->name('invoices.status_invoiced_all');
   Route::get('invoices/status_paid_all',             'InvoicesController@status_paid_all')     ->name('invoices.status_paid_all');
   Route::get('invoices/paid',                        'InvoicesController@paid')                ->name('invoices.paid');
   Route::get('invoices/unpaid',                      'InvoicesController@unpaid')              ->name('invoices.unpaid');
   Route::get('invoices/invoiced',                    'InvoicesController@invoiced')            ->name('invoices.invoiced');
   Route::get('invoices/logged',                      'InvoicesController@logged')              ->name('invoices.logged');
   Route::get('invoices/estimates',                   'InvoicesController@estimates')           ->name('invoices.estimates');

   Route::get('invoices',                             'InvoicesController@index')               ->name('invoices');
   Route::get('invoices/create/{id?}',                'InvoicesController@create')              ->name('invoices.create');
   Route::post('invoices/store',                      'InvoicesController@store')               ->name('invoices.store');
   Route::get('invoices/{id}',                        'InvoicesController@show')                ->name('invoices.show');
   Route::get('invoices/{id}/edit',                   'InvoicesController@edit')                ->name('invoices.edit');
   Route::put('invoices/{id}',                        'InvoicesController@update')              ->name('invoices.update');
   Route::delete('invoices/{id}',                     'InvoicesController@destroy')             ->name('invoices.destroy');

   //////////////////////////////////////////////////////////////////////////////
   // ACTIVITIES ROUTES
   //////////////////////////////////////////////////////////////////////////////
   Route::get('activities',                           'ActivitiesController@index')             ->name('activities');
   Route::get('activities/create/{id?}',              'ActivitiesController@create')            ->name('activities.create');
   Route::post('activities/store',                    'ActivitiesController@store')             ->name('activities.store');
   Route::get('activities/{id}/edit',                 'ActivitiesController@edit')              ->name('activities.edit');
   Route::put('activities/{id}',                      'ActivitiesController@update')            ->name('activities.update');
   Route::delete('activities/{id}',                   'ActivitiesController@destroy')           ->name('activities.destroy');

   //////////////////////////////////////////////////////////////////////////////
   // CLIENTS ROUTES
   //////////////////////////////////////////////////////////////////////////////
   Route::get('clients/search',                       'ClientsController@search')               ->name('clients.search');
   Route::get('clients',                              'ClientsController@index')                ->name('clients');
   Route::get('clients/create',                       'ClientsController@create')               ->name('clients.create');
   Route::post('clients/store',                       'ClientsController@store')                ->name('clients.store');
   Route::get('clients/{id}',                         'ClientsController@show')                 ->name('clients.show');
   Route::get('clients/{id}/edit',                    'ClientsController@edit')                 ->name('clients.edit');
   Route::put('clients/{id}',                         'ClientsController@update')               ->name('clients.update');
   Route::delete('clients/{id}',                      'ClientsController@destroy')              ->name('clients.destroy');

   //////////////////////////////////////////////////////////////////////////////
   // INVOICE ITEMS ROUTES
   //////////////////////////////////////////////////////////////////////////////
   Route::get('/invoiceItems/{inv_id}/create',        'InvoiceItemsController@create')          ->name('invoiceItems.create');
   Route::resource('/invoiceItems',                   'InvoiceItemsController',                 ['except' => ['create','show']]);

   //////////////////////////////////////////////////////////////////////////////
   // PRODUCTS ROUTES
   //////////////////////////////////////////////////////////////////////////////
   Route::get('products/search',                      'ProductsController@search')              ->name('products.search');
   Route::get('products',                             'ProductsController@index')               ->name('products');
   Route::get('products/create',                      'ProductsController@create')              ->name('products.create');
   Route::post('products/store',                      'ProductsController@store')               ->name('products.store');
   Route::get('products/{id}',                        'ProductsController@show')                ->name('products.show');
   Route::get('products/{id}/edit',                   'ProductsController@edit')                ->name('products.edit');
   Route::put('products/{id}',                        'ProductsController@update')              ->name('products.update');
   Route::delete('products/{id}',                     'ProductsController@destroy')             ->name('products.destroy');
});
