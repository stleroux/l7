<?php

// Route::get('/', function () {
// 	return view('UI/homepage');
// });

Route::get('/about', 'UI\SiteController@about')->name('about');
Route::get('/terms', 'UI\SiteController@terms')->name('terms');
Route::get('/privacy', 'UI\SiteController@privacy')->name('privacy');

Auth::routes();

Route::get('/', 'UI\SiteController@index')->name('homepage');

foreach (File::allFiles(__DIR__ . '/routes') as $route_file) {
  require $route_file->getPathname();
}
