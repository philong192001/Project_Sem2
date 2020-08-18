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
	Route::get('chi-tiet-don-hang/{id}',[
    'as'=>'chitietdonhang',
    'uses'=>'Admin\OrderController@getBillDetail'
]);      
});