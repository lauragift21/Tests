<?php


Route::get('/', 'PagesController@home');  
Route::get('about', 'PagesController@about');  

Route::get('customer', function(){
	$customer = App\Customer::find();
	echo $customer->name;
});