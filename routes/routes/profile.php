<?php
Route::resource('resetPassword', 'UI\ResetPasswordController')->only(['edit','update']);
// Route::get('changePassword', 'UI\Profile\ResetPasswordController')->name('profile.changePassword');
// Route::resource('resetPassword', 'Auth\ResetPasswordController')->only(['edit','update']);

// Route::namespace('Users')->prefix('users/')->name('users.changePassword.')->group(function() {
//    Route::get('{id}/edit',                 'UI\ResetPasswordController@edit')                 ->name('edit');
//    Route::put('{id}',                      'UI\ResetPasswordController@update')               ->name('update');
// });


Route::get('profile/{id}/edit',              ['uses'=>'UI\ProfileController@edit',              'as'=>'profile.edit']);
Route::put('profile/{id}',                   ['uses'=>'UI\ProfileController@update',            'as'=>'profile.update']);
Route::get('profile/{id}/resetPreferences',  ['uses'=>'UI\ProfileController@resetPreferences',  'as'=>'profile.resetPreferences']);
Route::get('profile/deleteImage/{id}',       ['uses'=>'UI\ProfileController@deleteImage',       'as'=>'profile.deleteImage']);
Route::get('profile/{id}/show',              ['uses'=>'UI\ProfileController@show',              'as'=>'profile.show']);



// Route::resource('resetPassword', 'Users\ResetPasswordController')->only(['edit','update']);
// Route::get('profile/{id}/resetPwd',          ['uses'=>'UI\ProfileController@resetPwd',          'as'=>'profile.resetPwd']);
// Route::post('profile/{id}/resetPwdPost',     ['uses'=>'UI\ProfileController@resetPwdPost',      'as'=>'profile.resetPwdPost']);

Route::get('profile/{id}/resetPwd',          ['uses'=>'UI\ResetPasswordController@edit',          'as'=>'profile.resetPwd']);
Route::post('profile/{id}/resetPwdPost',     ['uses'=>'UI\ResetPasswordController@update',        'as'=>'profile.resetPwdPost']);