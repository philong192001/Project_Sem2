<?php 
use Illuminate\Support\Facades\Route;
use App\Category;



    Route::group(['prefix' => '/pageCoffe'], function() {
        
        Route::get('home', 'Coffe\PageController@showHome')->name('home_page');
        

        Route::get('danh-muc-san-pham/{id}',[
             'as' => 'productCategory',
             'uses' => 'Coffe\CategoryController@showCategoryProduct'
        ]);


        Route::get('chi-tiet-san-pham/{id}',[
        	'as'=>'productDetail',
        	'uses'=>'Coffe\CategoryController@showDetailProduct'
        ]);        

    });
 ?> 