<?php

//////////////////////////////////////////////////////////////////////////////
// PROJECTS ROUTES
//////////////////////////////////////////////////////////////////////////////

Route::post('/projects/{project}/image',              'Admin\Projects\ImageController@store')              ->name('projects.image.store');
Route::put('/projects/{image}/image',                 'Admin\Projects\ImageController@update')             ->name('projects.image.update');
Route::delete('/projects/{project}/image',            'Admin\Projects\ImageController@destroy')            ->name('projects.image.delete');

Route::post('/projects/{project}/material',           'Admin\Projects\MaterialController@store')           ->name('projects.material.store');
Route::delete('/projects/{project}/material',         'Admin\Projects\MaterialController@destroy')         ->name('projects.material.delete');

Route::post('/projects/{project}/finish',             'Admin\Projects\FinishController@store')             ->name('projects.finish.store');
Route::delete('/projects/{project}/finish',           'Admin\Projects\FinishController@destroy')           ->name('projects.finish.delete');


Route::namespace('Admin\Projects')->prefix('admin')->name('admin.')->group(function() {
   Route::post('/projects/restore/{project}', 'ProjectsController@restore')             ->name('projects.restore');
   Route::post('/projects/mass_restore',      'ProjectsController@massRestore')         ->name('projects.mass_restore');
   Route::post('/projects/delete/{project}',  'ProjectsController@delete')              ->name('projects.delete');
   Route::delete('/projects/mass_delete',     'ProjectsController@massDelete')          ->name('projects.mass_delete');
   Route::delete('/projects/mass_destroy',    'ProjectsController@massDestroy')         ->name('projects.mass_destroy');
   Route::get('/projects/trashed',            'ProjectsController@trashed')             ->name('projects.trashed');

   Route::post('/projects/resetViews/{recipe}',     'ProjectsController@resetViews')            ->name('projects.resetViews');
   Route::post('/projects/mass_resetViews',         'ProjectsController@massResetViews')        ->name('projects.mass_resetViews');

   Route::resource('projects',                'ProjectsController');
});


//////////////////////////////////////////////////////////////////////////////
// FRONTEND PROJECTS ROUTES
//////////////////////////////////////////////////////////////////////////////

Route::namespace('UI\Projects')->prefix('projects')->name('projects.')->group(function() {
   Route::get('{project}/show',    'ProjectsController@show')                   ->name('show');
   Route::get('{filter?}',         'ProjectsController@index')                  ->name('index');
   Route::post('{project}/comment',             'CommentController@store')            ->name('comment.store');
});

