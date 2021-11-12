<?php

// SELECT SIGN MATERIAL
Route::get('carvings/customOrder/sign/house/material',   'UI\Carvings\CustomOrder\Sign\HouseNumber\MaterialController@create')
   ->name('carvings.customOrder.sign.house.material.create');
Route::post('carvings/customOrder/sign/house/material',  'UI\Carvings\CustomOrder\Sign\HouseNumber\MaterialController@store')
   ->name('carvings.customOrder.sign.house.material.store');

// SELECT SIGN PATTERN
Route::get('carvings/customOrder/sign/house/pattern',   'UI\Carvings\CustomOrder\Sign\HouseNumber\PatternController@create')
   ->name('carvings.customOrder.sign.house.pattern.create');
Route::post('carvings/customOrder/sign/house/pattern',  'UI\Carvings\CustomOrder\Sign\HouseNumber\PatternController@store')
   ->name('carvings.customOrder.sign.house.pattern.store');

// SELECT STYLE (Raised or carved letters)
Route::get('carvings/customOrder/sign/house/style',   'UI\Carvings\CustomOrder\Sign\HouseNumber\StyleController@create')
   ->name('carvings.customOrder.sign.house.style.create');
Route::post('carvings/customOrder/sign/house/style',  'UI\Carvings\CustomOrder\Sign\HouseNumber\StyleController@store')
   ->name('carvings.customOrder.sign.house.style.store');

// SELECT SIGN SIZE
Route::get('carvings/customOrder/sign/house/size',   'UI\Carvings\CustomOrder\Sign\HouseNumber\SizeController@create')
   ->name('carvings.customOrder.sign.house.size.create');
Route::post('carvings/customOrder/sign/house/size',  'UI\Carvings\CustomOrder\Sign\HouseNumber\SizeController@store')
   ->name('carvings.customOrder.sign.house.size.store');

// SELECT SIGN NUMBER
Route::get('carvings/customOrder/sign/house/number',   'UI\Carvings\CustomOrder\Sign\HouseNumber\NumberController@create')
   ->name('carvings.customOrder.sign.house.number.create');
Route::post('carvings/customOrder/sign/house/number',  'UI\Carvings\CustomOrder\Sign\HouseNumber\NumberController@store')
   ->name('carvings.customOrder.sign.house.number.store');

// SELECT SIGN FONT
Route::get('carvings/customOrder/sign/house/font',   'UI\Carvings\CustomOrder\Sign\HouseNumber\FontController@create')
   ->name('carvings.customOrder.sign.house.font.create');
Route::post('carvings/customOrder/sign/house/font',  'UI\Carvings\CustomOrder\Sign\HouseNumber\FontController@store')
   ->name('carvings.customOrder.sign.house.font.store');

// SELECT SIGN COLOR
Route::get('carvings/customOrder/sign/house/color',   'UI\Carvings\CustomOrder\Sign\HouseNumber\ColorController@create')
   ->name('carvings.customOrder.sign.house.color.create');
Route::post('carvings/customOrder/sign/house/color',  'UI\Carvings\CustomOrder\Sign\HouseNumber\ColorController@store')
   ->name('carvings.customOrder.sign.house.color.store');

// SELECT SIGN FINISH
Route::get('carvings/customOrder/sign/house/finish',   'UI\Carvings\CustomOrder\Sign\HouseNumber\FinishController@create')
   ->name('carvings.customOrder.sign.house.finish.create');
Route::post('carvings/customOrder/sign/house/finish',  'UI\Carvings\CustomOrder\Sign\HouseNumber\FinishController@store')
   ->name('carvings.customOrder.sign.house.finish.store');
   