<?php

Route::get('contact', 'UI\ContactFormController@create')->name('contact');
Route::post('contact', 'UI\ContactFormController@store');