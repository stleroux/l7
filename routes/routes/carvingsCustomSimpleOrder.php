<?php

// SELECT SIGN MATERIAL
Route::get('carvings/customOrder/sign/simple/material',   'UI\Carvings\CustomOrder\Sign\Simple\MaterialController@create')
   ->name('carvings.customOrder.sign.simple.material.create');
Route::post('carvings/customOrder/sign/simple/material',  'UI\Carvings\CustomOrder\Sign\Simple\MaterialController@store')
   ->name('carvings.customOrder.sign.simple.material.store');

// SELECT SIGN PATTERN
// Route::get('carvings/customOrder/sign/simple/pattern',   'UI\Carvings\CustomOrder\Sign\Simple\PatternController@create')
//    ->name('carvings.customOrder.sign.simple.pattern.create');
// Route::post('carvings/customOrder/sign/simple/pattern',  'UI\Carvings\CustomOrder\Sign\Simple\PatternController@store')
//    ->name('carvings.customOrder.sign.simple.pattern.store');

// // SELECT STYLE (Raised or carved letters)
// Route::get('carvings/customOrder/sign/simple/style',   'UI\Carvings\CustomOrder\Sign\Simple\StyleController@create')
//    ->name('carvings.customOrder.sign.simple.style.create');
// Route::post('carvings/customOrder/sign/simple/style',  'UI\Carvings\CustomOrder\Sign\Simple\StyleController@store')
//    ->name('carvings.customOrder.sign.simple.style.store');

// // SELECT SIGN SIZE
// Route::get('carvings/customOrder/sign/simple/size',   'UI\Carvings\CustomOrder\Sign\Simple\SizeController@create')
//    ->name('carvings.customOrder.sign.simple.size.create');
// Route::post('carvings/customOrder/sign/simple/size',  'UI\Carvings\CustomOrder\Sign\Simple\SizeController@store')
//    ->name('carvings.customOrder.sign.simple.size.store');

// // SELECT SIGN NUMBER
// Route::get('carvings/customOrder/sign/simple/number',   'UI\Carvings\CustomOrder\Sign\Simple\NumberController@create')
//    ->name('carvings.customOrder.sign.simple.number.create');
// Route::post('carvings/customOrder/sign/simple/number',  'UI\Carvings\CustomOrder\Sign\Simple\NumberController@store')
//    ->name('carvings.customOrder.sign.simple.number.store');

// // SELECT SIGN FONT
// Route::get('carvings/customOrder/sign/simple/font',   'UI\Carvings\CustomOrder\Sign\Simple\FontController@create')
//    ->name('carvings.customOrder.sign.simple.font.create');
// Route::post('carvings/customOrder/sign/simple/font',  'UI\Carvings\CustomOrder\Sign\Simple\FontController@store')
//    ->name('carvings.customOrder.sign.simple.font.store');

// // SELECT SIGN COLOR
// Route::get('carvings/customOrder/sign/simple/color',   'UI\Carvings\CustomOrder\Sign\Simple\ColorController@create')
//    ->name('carvings.customOrder.sign.simple.color.create');
// Route::post('carvings/customOrder/sign/simple/color',  'UI\Carvings\CustomOrder\Sign\Simple\ColorController@store')
//    ->name('carvings.customOrder.sign.simple.color.store');

// // SELECT SIGN FINISH
// Route::get('carvings/customOrder/sign/simple/finish',   'UI\Carvings\CustomOrder\Sign\Simple\FinishController@create')
//    ->name('carvings.customOrder.sign.simple.finish.create');
// Route::post('carvings/customOrder/sign/simple/finish',  'UI\Carvings\CustomOrder\Sign\Simple\FinishController@store')
//    ->name('carvings.customOrder.sign.simple.finish.store');
