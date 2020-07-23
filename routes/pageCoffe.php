<?php 
    Route::group(['prefix' => '/pageCoffe'], function() {
        
        Route::get('home', 'Coffe\PageController@showHome')->name('home_page');
    });
 ?>