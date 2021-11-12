<?php

//////////////////////////////////////////////////////////////////////////////
// CARVINGS ROUTES
//////////////////////////////////////////////////////////////////////////////
Route::namespace('Admin\Carvings')->prefix('admin')->name('admin.')->group(function() {
   Route::post('/carvings/{carving}/image',              'ImageController@store')                  ->name('carvings.image.store');
   Route::put('/carvings/{image}/image',                 'ImageController@update')                 ->name('carvings.image.update');
   Route::delete('/carvings/{carving}/image',            'ImageController@destroy')                ->name('carvings.image.delete');

   Route::post('/carvings/{carving}/material',           'MaterialController@store')               ->name('carvings.material.store');
   Route::delete('/carvings/{carving}/material',         'MaterialController@destroy')             ->name('carvings.material.delete');

   Route::post('/carvings/{carving}/finish',             'FinishController@store')                 ->name('carvings.finish.store');
   Route::delete('/carvings/{carving}/finish',           'FinishController@destroy')               ->name('carvings.finish.delete');

   // Route::put('/carvings/{image}/image',                 'ImageController@update')                 ->name('carvings.image.update');
   // Route::delete('/carvings/{carving}/jobSheet',        'CarvingsController@destroyJobSheet')      ->name('carvings.jobSheet.delete');
   Route::get('carvings/deleteJobSheet/{id}',            'CarvingsController@deleteJobSheet')      ->name('carvings.deleteJobSheet');

   Route::post('/carvings/restore/{carving}',            'CarvingsController@restore')             ->name('carvings.restore');
   Route::post('/carvings/mass_restore',                 'CarvingsController@massRestore')         ->name('carvings.mass_restore');
   Route::post('/carvings/delete/{carving}',             'CarvingsController@delete')              ->name('carvings.delete');
   Route::delete('/carvings/mass_delete',                'CarvingsController@massDelete')          ->name('carvings.mass_delete');
   Route::delete('/carvings/mass_destroy',               'CarvingsController@massDestroy')         ->name('carvings.mass_destroy');
   Route::get('/carvings/trashed',                       'CarvingsController@trashed')             ->name('carvings.trashed');
   

   Route::post('/carvings/resetViews/{carving}',         'CarvingsController@resetViews')          ->name('carvings.resetViews');
   Route::post('/carvings/mass_resetViews',              'CarvingsController@massResetViews')      ->name('carvings.mass_resetViews');

   Route::resource('carvings',                           'CarvingsController');
   // Route::get('/carvings/showJobSheet/{carving}',        'CarvingsController@showJobSheet')        ->name('carvings.showJobSheet');
});



//////////////////////////////////////////////////////////////////////////////
// FRONTEND CARVINGS ROUTES
//////////////////////////////////////////////////////////////////////////////

// SELECT ITEM
Route::get('carvings/customOrder/create',   'UI\Carvings\CustomOrderController@create')
   ->name('carvings.customOrder.create');
Route::post('carvings/customOrder/store',   'UI\Carvings\CustomOrderController@store')
   ->name('carvings.customOrder.store');
Route::get('carvings/customOrder/reset',   'UI\Carvings\CustomOrderController@reset')
   ->name('carvings.customOrder.reset');


// SELECT SIGN TYPE
Route::get('carvings/customOrder/sign/type/create',   'UI\Carvings\CustomOrder\Sign\TypeController@create')
   ->name('carvings.customOrder.sign.type.create');
Route::post('carvings/customOrder/sign/type/store',   'UI\Carvings\CustomOrder\Sign\TypeController@store')
   ->name('carvings.customOrder.sign.type.store');



// Route::get('carvings/customOrders/step-two',    'UI\Carvings\CustomOrderController@createStepTwo')->name('carvings.customOrders.step.two');
// Route::post('carvings/customOrders/step-two',   'UI\Carvings\CustomOrderController@postCreateStepTwo')->name('carvings.customOrders.step.two.post');









// Route::get('carvings/create-step-two',    'UI\Carvings\CustomOrderController@createStepTwo')->name('carvings.create.step.two');
// Route::post('carvings/create-step-two',   'UI\Carvings\CustomOrderController@postCreateStepTwo')->name('carvings.create.step.two.post');

// Route::get('carvings/create-step-three',  'UI\Carvings\CustomOrderController@createStepThree')->name('carvings.create.step.three');
// Route::post('carvings/create-step-three', 'UI\Carvings\CustomOrderController@postCreateStepThree')->name('carvings.create.step.three.post');

// Route::get('carvings/create-step-four',   'UI\Carvings\CustomOrderController@createStepFour')->name('carvings.create.step.four');
// Route::post('carvings/create-step-four',  'UI\Carvings\CustomOrderController@postCreateStepFour')->name('carvings.create.step.four.post');

// Route::get('carvings/create-step-five',   'UI\Carvings\CustomOrderController@createStepFive')->name('carvings.create.step.five');
// Route::post('carvings/create-step-five',  'UI\Carvings\CustomOrderController@postCreateStepFive')->name('carvings.create.step.five.post');








Route::namespace('UI\Carvings')->prefix('carvings')->name('carvings.')->group(function() {
   Route::get('typeList',                       'CarvingsController@typeList')               ->name('typeList');
   Route::get('{carving}/show',                 'CarvingsController@show')                   ->name('show');
   Route::get('faq',                            'CarvingsController@faq')                    ->name('faq');
   Route::get('{filter?}/{tag?}',               'CarvingsController@index')                  ->name('index');
   Route::post('{carving}/comment',             'CommentController@store')                   ->name('comment.store');
});


// Route::get('carvings', 'CarvingsController@index')->name('carvings.index');
  



Route::middleware('auth')->group(function () {
    Route::post('like', 'UI\LikeController@like')->name('like');
    Route::delete('like', 'UI\LikeController@unlike')->name('unlike');
});
