<?php

use Spatie\Honeypot\ProtectAgainstSpam;

// Route::get('/', function () {
// 	return view('UI/homepage');
// });

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
// Auth::routes(['verify' => true]);
Auth::routes();