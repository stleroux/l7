<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

foreach (File::allFiles(__DIR__ . '/routes') as $route_file) {
  require $route_file->getPathname();
}
