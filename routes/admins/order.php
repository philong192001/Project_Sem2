<?php
//Menu
Route::prefix('order')->group(function () {
	Route::get('/',
		[
			'as'   => 'order.index',
			'uses' => 'Admin\OrderController@index',
                // 'middleware'=>'can:menu-list'
		]);  
	Route::get('delivery/{id}',[
		'as'=>'DeliveryBill',
		'uses'=>'Admin\OrderController@getDelivery'
	]);
	Route::get('order-details/{id}',[
		'as'=>'BillDetail',
		'uses'=>'Admin\OrderController@getBillDetail'
	]);      
});