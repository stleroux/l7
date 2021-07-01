<?php

use Spatie\Honeypot\ProtectAgainstSpam;
// use Laravel\Socialite\Facades\Socialite;

Route::get('/phpinfo', function () {
   return view('phpinfo');
});

// Route::group(['middleware' => 'verified'], function () {

   foreach (File::allFiles(__DIR__ . '/routes') as $route_file) {
     require $route_file->getPathname();
   }

// });

Route::get('/',            'UI\SiteController@index')          ->name('homepage');
Route::get('/about',    'UI\SiteController@about')          ->name('about');
Route::get('/faq',         'UI\SiteController@faq')            ->name('faq');
Route::get('/terms',    'UI\SiteController@terms')          ->name('terms');
Route::get('/privacy',     'UI\SiteController@privacy')        ->name('privacy');
Route::get('contact',      'UI\ContactFormController@create')     ->name('contact');
Route::post('contact',     'UI\ContactFormController@store')      ->middleware(ProtectAgainstSpam::class);
Route::post('/UI/search',  'UI\SearchController@search')       ->name('UI.search');

Route::get('myInvoices',               'UI\SiteController@myInvoices')     ->name('myInvoices');
Route::get('viewInvoice/{invoice}',    'UI\SiteController@viewInvoice')    ->name('viewInvoice');
Route::get('downloadPDFInvoice/{invoice}', 'UI\SiteController@downloadPDFInvoice')  ->name('downloadPDFInvoice');

// Route::get('requestQuote',               'UI\QuotesController@create')     ->name('requestQuote');

// Route::get('cart', 'UI\SiteController@cart');
// Route::get('add-to-request/{model}/{id}', 'UI\SiteController@addToRequest')->name('addToRequest');
// Route::get('add-to-request/{type}', 'UI\SiteController@addToRequest')->name('addToRequest');

// Auth::routes(['verify' => true]);
Auth::routes();

Route::view('/inactive',   'errors.inactive')                  ->name('errors.inactive');
// Route::view('/welcome', 'errors.inactive');


Route::get('login/{service}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{service}/callback', 'Auth\LoginController@handleProviderCallback');