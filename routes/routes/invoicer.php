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
   // QUOTES ROUTES
   //////////////////////////////////////////////////////////////////////////////
//    Route::get('quotes/{inv_id}/downloadPDFInvoice', 'QuotesController@downloadPDFInvoice')  ->name('quotes.downloadPDFInvoice');
//    Route::get('quotes/{inv_id}/PDF',                'QuotesController@PDF')                 ->name('quotes.PDF');
//    Route::get('quotes/{inv_id}/status_invoiced',    'QuotesController@status_invoiced')     ->name('quotes.status_invoiced');
//    Route::get('quotes/{inv_id}/status_paid',        'QuotesController@status_paid')         ->name('quotes.status_paid');
//    Route::get('quotes/status_invoiced_all',         'QuotesController@status_invoiced_all') ->name('quotes.status_invoiced_all');
//    Route::get('quotes/status_paid_all',             'QuotesController@status_paid_all')     ->name('quotes.status_paid_all');
//    Route::get('quotes/status_logged_all',           'QuotesController@status_logged_all')   ->name('quotes.status_logged_all');
//    Route::get('quotes/status_logged/{id}',          'QuotesController@status_logged')       ->name('quotes.status_logged');
//    Route::get('quotes/paid',                        'QuotesController@paid')                ->name('quotes.paid');
// Route::get('quotes/unpaid',                      'QuotesController@unpaid')              ->name('quotes.unpaid');
//    Route::get('quotes/invoiced',                    'QuotesController@invoiced')            ->name('quotes.invoiced');
// Route::get('quotes/logged',                      'QuotesController@logged')              ->name('quotes.logged');
//    Route::get('quotes/estimates',                   'QuotesController@estimates')           ->name('quotes.estimates');
//    Route::get('quotes/quotes',                      'QuotesController@quotes')              ->name('quotes.quotes');

//    Route::get('quotes',                             'QuotesController@index')               ->name('quotes');
//    Route::get('quotes/create/{id?}',                'QuotesController@create')              ->name('quotes.create');
//    Route::post('quotes/store',                      'QuotesController@store')               ->name('quotes.store');
//    Route::get('quotes/{id}',                        'QuotesController@show')                ->name('quotes.show');
//    Route::get('quotes/{id}/edit',                   'QuotesController@edit')                ->name('quotes.edit');
//    Route::put('quotes/{id}',                        'QuotesController@update')              ->name('quotes.update');
//    Route::delete('quotes/{id}',                     'QuotesController@destroy')             ->name('quotes.destroy');


   //////////////////////////////////////////////////////////////////////////////
   // ESTIMATES ROUTES
   //////////////////////////////////////////////////////////////////////////////
//    Route::get('estimates/{inv_id}/downloadPDFInvoice', 'EstimatesController@downloadPDFInvoice')  ->name('estimates.downloadPDFInvoice');
//    Route::get('estimates/{inv_id}/PDF',                'EstimatesController@PDF')                 ->name('estimates.PDF');
//    Route::get('estimates/{inv_id}/status_invoiced',    'EstimatesController@status_invoiced')     ->name('estimates.status_invoiced');
//    Route::get('estimates/{inv_id}/status_paid',        'EstimatesController@status_paid')         ->name('estimates.status_paid');
//    Route::get('estimates/status_invoiced_all',         'EstimatesController@status_invoiced_all') ->name('estimates.status_invoiced_all');
//    Route::get('estimates/status_paid_all',             'EstimatesController@status_paid_all')     ->name('estimates.status_paid_all');
//    Route::get('estimates/status_logged_all',           'EstimatesController@status_logged_all')   ->name('estimates.status_logged_all');
//    Route::get('estimates/status_logged/{id}',          'EstimatesController@status_logged')       ->name('estimates.status_logged');
//    Route::get('estimates/paid',                        'EstimatesController@paid')                ->name('estimates.paid');
// Route::get('estimates/unpaid',                      'EstimatesController@unpaid')              ->name('estimates.unpaid');
//    Route::get('estimates/invoiced',                    'EstimatesController@invoiced')            ->name('estimates.invoiced');
// Route::get('estimates/logged',                      'EstimatesController@logged')              ->name('estimates.logged');
//    Route::get('estimates/estimates',                   'EstimatesController@estimates')           ->name('estimates.estimates');
//    Route::get('estimates/quotes',                      'EstimatesController@quotes')              ->name('estimates.quotes');

//    Route::get('estimates',                             'EstimatesController@index')               ->name('estimates');
//    Route::get('estimates/create/{id?}',                'EstimatesController@create')              ->name('estimates.create');
//    Route::post('estimates/store',                      'EstimatesController@store')               ->name('estimates.store');
//    Route::get('estimates/{id}',                        'EstimatesController@show')                ->name('estimates.show');
//    Route::get('estimates/{id}/edit',                   'EstimatesController@edit')                ->name('estimates.edit');
//    Route::put('estimates/{id}',                        'EstimatesController@update')              ->name('estimates.update');
//    Route::delete('estimates/{id}',                     'EstimatesController@destroy')             ->name('estimates.destroy');


   //////////////////////////////////////////////////////////////////////////////
   // INVOICED ROUTES
   //////////////////////////////////////////////////////////////////////////////
//    Route::get('invoiced/{inv_id}/downloadPDFInvoice', 'InvoicedController@downloadPDFInvoice')  ->name('invoiced.downloadPDFInvoice');
//    Route::get('invoiced/{inv_id}/PDF',                'InvoicedController@PDF')                 ->name('invoiced.PDF');
//    Route::get('invoiced/{inv_id}/status_invoiced',    'InvoicedController@status_invoiced')     ->name('invoiced.status_invoiced');
//    Route::get('invoiced/{inv_id}/status_paid',        'InvoicedController@status_paid')         ->name('invoiced.status_paid');
//    Route::get('invoiced/status_invoiced_all',         'InvoicedController@status_invoiced_all') ->name('invoiced.status_invoiced_all');
//    Route::get('invoiced/status_paid_all',             'InvoicedController@status_paid_all')     ->name('invoiced.status_paid_all');
//    Route::get('invoiced/status_logged_all',           'InvoicedController@status_logged_all')   ->name('invoiced.status_logged_all');
//    Route::get('invoiced/status_logged/{id}',          'InvoicedController@status_logged')       ->name('invoiced.status_logged');
//    Route::get('invoiced/paid',                        'InvoicedController@paid')                ->name('invoiced.paid');
// Route::get('invoiced/unpaid',                      'InvoicedController@unpaid')              ->name('invoiced.unpaid');
//    Route::get('invoiced/invoiced',                    'InvoicedController@invoiced')            ->name('invoiced.invoiced');
// Route::get('invoiced/logged',                      'InvoicedController@logged')              ->name('invoiced.logged');
//    Route::get('invoiced/estimates',                   'InvoicedController@estimates')           ->name('invoiced.estimates');
//    Route::get('invoiced/quotes',                      'InvoicedController@quotes')              ->name('invoiced.quotes');

//    Route::get('invoiced',                             'InvoicedController@index')               ->name('invoiced');
//    Route::get('invoiced/create/{id?}',                'InvoicedController@create')              ->name('invoiced.create');
//    Route::post('invoiced/store',                      'InvoicedController@store')               ->name('invoiced.store');
//    Route::get('invoiced/{id}',                        'InvoicedController@show')                ->name('invoiced.show');
//    Route::get('invoiced/{id}/edit',                   'InvoicedController@edit')                ->name('invoiced.edit');
//    Route::put('invoiced/{id}',                        'InvoicedController@update')              ->name('invoiced.update');
//    Route::delete('invoiced/{id}',                     'InvoicedController@destroy')             ->name('invoiced.destroy');


   //////////////////////////////////////////////////////////////////////////////
   // INVOICES ROUTES
   //////////////////////////////////////////////////////////////////////////////
   Route::get('invoices/{inv_id}/downloadPDFInvoice', 'InvoicesController@downloadPDFInvoice')  ->name('invoices.downloadPDFInvoice');
   Route::get('invoices/{inv_id}/PDF',                'InvoicesController@PDF')                 ->name('invoices.PDF');
   
   Route::get('invoices/{inv_id}/status_quoted',      'InvoicesController@status_quoted')       ->name('invoices.status_quoted');
   Route::get('invoices/{inv_id}/status_estimated',   'InvoicesController@status_estimated')    ->name('invoices.status_estimated');
   Route::get('invoices/{inv_id}/status_invoiced',    'InvoicesController@status_invoiced')     ->name('invoices.status_invoiced');
   Route::get('invoices/{inv_id}/status_paid',        'InvoicesController@status_paid')         ->name('invoices.status_paid');
   Route::get('invoices/{inv_id}/status_workOrdered', 'InvoicesController@status_workOrdered')  ->name('invoices.status_workOrdered');
   Route::get('invoices/{inv_id}/status_completed',   'InvoicesController@status_completed')    ->name('invoices.status_completed');
   Route::get('invoices/{inv_id}/status_shipped',     'InvoicesController@status_shipped')      ->name('invoices.status_shipped');
   Route::get('invoices/{inv_id}/status_pickedUp',    'InvoicesController@status_pickedUp')     ->name('invoices.status_pickedUp');

   Route::get('invoices/status_invoiced_all',         'InvoicesController@status_invoiced_all') ->name('invoices.status_invoiced_all');
   Route::get('invoices/status_paid_all',             'InvoicesController@status_paid_all')     ->name('invoices.status_paid_all');
   // Route::get('invoices/status_logged_all',           'InvoicesController@status_logged_all')   ->name('invoices.status_logged_all');
   // Route::get('invoices/status_logged/{id}',          'InvoicesController@status_logged')       ->name('invoices.status_logged');
      // Route::get('paid',                                 'InvoicesController@paid')                ->name('paid');
// Route::get('invoices/unpaid',                      'InvoicesController@unpaid')              ->name('invoices.unpaid');
      // Route::get('invoiced',                             'InvoicesController@invoiced')            ->name('invoiced');
// Route::get('invoices/logged',                      'InvoicesController@logged')              ->name('invoices.logged');
      // Route::get('estimates',                            'InvoicesController@estimates')           ->name('estimates');
      // Route::get('quotes',                               'InvoicesController@quotes')              ->name('quotes');

   Route::get('invoices/create/{id?}',                'InvoicesController@create')              ->name('invoices.create');
   Route::get('invoices/{id}/show',                   'InvoicesController@show')                ->name('invoices.show');
   Route::get('invoices/{type?}',                     'InvoicesController@index')               ->name('invoices');
   Route::get('invoices/{invoice}/edit',              'InvoicesController@edit')                ->name('invoices.edit');
   Route::post('invoices/store',                      'InvoicesController@store')               ->name('invoices.store');
   Route::put('invoices/{invoice}',                   'InvoicesController@update')              ->name('invoices.update');
   Route::put('invoices/refreshData/{invoice}',       'InvoicesController@refreshData')         ->name('invoices.refreshData');
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
   // Route::get('clients/search',                       'ClientsController@search')               ->name('clients.search');
   // Route::get('clients',                              'ClientsController@index')                ->name('clients');
   Route::get('clients/create',                       'ClientsController@create')               ->name('clients.create');
   Route::post('clients/store',                       'ClientsController@store')                ->name('clients.store');
   // Route::get('clients/{id}',                         'ClientsController@show')                 ->name('clients.show');
   // Route::get('clients/{id}/edit',                    'ClientsController@edit')                 ->name('clients.edit');
   // Route::put('clients/{id}',                         'ClientsController@update')               ->name('clients.update');
   // Route::delete('clients/{id}',                      'ClientsController@destroy')              ->name('clients.destroy');

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
