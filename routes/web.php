<?php

use Spatie\Honeypot\ProtectAgainstSpam;

Route::get('/phpinfo', function () {
	return view('phpinfo');
});

// Route::group(['middleware' => 'verified'], function () {

	foreach (File::allFiles(__DIR__ . '/routes') as $route_file) {
	  require $route_file->getPathname();
	}

// });


Route::get('/', 'UI\SiteController@index')->name('homepage');
Route::get('/about', 'UI\SiteController@about')->name('about');
Route::get('/terms', 'UI\SiteController@terms')->name('terms');
Route::get('/privacy', 'UI\SiteController@privacy')->name('privacy');
Route::get('contact', 'UI\ContactFormController@create')->name('contact');
Route::post('contact', 'UI\ContactFormController@store')->middleware(ProtectAgainstSpam::class);
Route::post('/UI/search', 'UI\SearchController@search')->name('UI.search');

// Auth::routes(['verify' => true]);
Auth::routes();

Route::view('/inactive', 'errors.inactive')->name('errors.inactive');
// Route::view('/welcome', 'errors.inactive');