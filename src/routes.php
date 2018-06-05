<?php
Route::get('calculator', function(){
	echo 'Hello from the calculator package!';
});

Route::get('add/{a}/{b}','Punit\Calculator\CalculatorController@add');
Route::get('subtrack/{a}/{b}','Punit\Calculator\CalculatorController@sub');
Route::get('multiply/{a}/{b}','Punit\Calculator\CalculatorController@multi');