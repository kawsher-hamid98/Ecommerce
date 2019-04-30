<?php
Route::group(['middleware' => 'prevent-back-history'],function(){


Route::get('/', function() {
	return view('home');
});

Route::get('/user_login', 'userController@userLoginView');
Route::post('/user_login', 'userController@userLoginStore');

Route::get('/user_signup', 'userController@userSignupView');
Route::post('/user_signup', 'userController@userSignupStore');

Route::get('/supplier_login', 'SupplierController@supplierLoginView');
Route::post('/supplier_login', 'SupplierController@supplierLoginStore');

Route::get('/logout', 'MainController@logout');

Route::get('/supplierDash', 'supplierAccessController@dash');

Route::get('/sendProducts', 'supplierAccessController@sendProductView');
Route::post('/sendProducts', 'supplierAccessController@sendProduct');

Route::post('/deliverPro', 'supplierAccessController@deliverProduct');

Route::get('/getDelivaryProduct', 'GetDeliveredProductsController@getDelivary');



});
