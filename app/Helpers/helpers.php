<?php

// Used in the recipes menu to convert from fruitDishes to Fruit Dishes
function deliciousCamelcase($str)
{
	$formattedStr = '';
	$re = '/
			(?<=[a-z])
			(?=[A-Z])
			| (?<=[A-Z])
			(?=[A-Z][a-z])
			/x';
	$a = preg_split($re, $str);
	$formattedStr = implode(' ', $a);
	return $formattedStr;
}