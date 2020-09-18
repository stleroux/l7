<?php

Route::post('/projects/{project}/image',              'Admin\Projects\ImageController@store')              ->name('projects.image.store');
Route::put('/projects/{image}/image',                 'Admin\Projects\ImageController@update')             ->name('projects.image.update');
Route::delete('/projects/{project}/image',            'Admin\Projects\ImageController@destroy')            ->name('projects.image.delete');

Route::post('/projects/{project}/material',           'Admin\Projects\MaterialController@store')           ->name('projects.material.store');
Route::delete('/projects/{project}/material',         'Admin\Projects\MaterialController@destroy')         ->name('projects.material.delete');

Route::post('/projects/{project}/finish',             'Admin\Projects\FinishController@store')             ->name('projects.finish.store');
Route::delete('/projects/{project}/finish',           'Admin\Projects\FinishController@destroy')           ->name('projects.finish.delete');

// Route::post('projects/{project}/comment',             'Admin\Projects\CommentController@store')            ->name('projects.comment.store');

//////////////////////////////////////////////////////////////////////////////
// PROJECTS MATERIALS ROUTES
//////////////////////////////////////////////////////////////////////////////
Route::namespace('Admin\Projects')->prefix('admin/projects')->name('admin.projects.')->group(function() {
   // Route::get('{material}/delete',        'MaterialsController@delete')           ->name('delete');
   Route::get('/materials/{material}/restore',   'MaterialsController@restore')             ->name('materials.restore');
   Route::post('/materials/mass_restore',        'MaterialsController@massRestore')         ->name('materials.mass_restore');
   Route::post('/materials/delete/{material}',   'MaterialsController@delete')              ->name('materials.delete');
   Route::delete('/materials/mass_delete',       'MaterialsController@massDelete')          ->name('materials.mass_delete');
   Route::delete('/materials/mass_destroy',      'MaterialsController@massDestroy')         ->name('materials.mass_destroy');
   Route::get('/materials/trashed',              'MaterialsController@trashed')             ->name('materials.trashed');
   Route::resource('materials',                  'MaterialsController');
});

//////////////////////////////////////////////////////////////////////////////
// PROJECTS FINISHES ROUTES
//////////////////////////////////////////////////////////////////////////////
Route::namespace('Admin\Projects')->prefix('admin/projects')->name('admin.projects.')->group(function() {
   // Route::get('{finish}/delete',          'FinishesController@delete')           ->name('delete');
   Route::get('/finishes/{finish}/restore',   'FinishesController@restore')             ->name('finishes.restore');
   Route::post('/finishes/mass_restore',      'FinishesController@massRestore')         ->name('finishes.mass_restore');
   Route::post('/finishes/delete/{finish}',   'FinishesController@delete')              ->name('finishes.delete');
   Route::delete('/finishes/mass_delete',     'FinishesController@massDelete')          ->name('finishes.mass_delete');
   Route::delete('/finishes/mass_destroy',    'FinishesController@massDestroy')         ->name('finishes.mass_destroy');
   Route::get('/finishes/trashed',            'FinishesController@trashed')             ->name('finishes.trashed');
   Route::resource('finishes',                'FinishesController');
});

//////////////////////////////////////////////////////////////////////////////
// PROJECTS ROUTES
//////////////////////////////////////////////////////////////////////////////
Route::namespace('Admin\Projects')->prefix('admin')->name('admin.')->group(function() {
   Route::get('/projects/{project}/restore',  'ProjectsController@restore')             ->name('projects.restore');
   Route::post('/projects/mass_restore',      'ProjectsController@massRestore')         ->name('projects.mass_restore');
   Route::post('/projects/delete/{project}',  'ProjectsController@delete')              ->name('projects.delete');
   Route::delete('/projects/mass_delete',     'ProjectsController@massDelete')          ->name('projects.mass_delete');
   Route::delete('/projects/mass_destroy',    'ProjectsController@massDestroy')         ->name('projects.mass_destroy');
   Route::get('/projects/trashed',            'ProjectsController@trashed')             ->name('projects.trashed');
   // Route::get('{filter?}',          'Projects\ProjectsController@index')               ->name('projects.index');
   Route::resource('projects',                'ProjectsController');
});

// Route::get('/projects/{project}/show',    'Projects\ProjectsController@show')                   ->name('projects.show');

Route::namespace('UI\Projects')->prefix('projects')->name('projects.')->group(function() {
   Route::get('{project}/show',    'ProjectsController@show')                   ->name('show');
   Route::get('{filter?}',         'ProjectsController@index')                  ->name('index');
   Route::post('{project}/comment',             'CommentController@store')            ->name('comment.store');
});