<?php 
use Illuminate\Support\Facades\Route;

   
//home      
        Route::get('home', 'Coffe\PageController@showHome')->name('show-home');
                

       
//MENU
        Route::get('menu', 'Coffe\MenuController@showMenu')->name('show-menu');

//Services
        Route::get('services', 'Coffe\ServicesController@showServices')->name('show-services');

//Blog
        Route::get('blog', 'Coffe\BlogController@showBlog')->name('show-blog');

//about
        Route::get('about', 'Coffe\AboutController@showAbout')->name('show-about');
//shop
        Route::get('shop', 'Coffe\ShopController@showShop')->name('show-shop');
//productDetail
        Route::get('chi-tiet/{id}', 'Coffe\ProductController@ShowProduct')->name('show-productDetail');
//contact
        Route::get('contact', 'Coffe\ContactController@showContact')->name('show-contact');

//cart
        Route::get('cart', 'Coffe\CartController@showCart')->name('show-cart');

        Route::get('Add-Cart/{id}', 'Coffe\CartController@AddCart');

        Route::get('Delete-Item-Cart/{id}', 'Coffe\CartController@DeleteItemCart');

        Route::get('Delete-Item-List-Cart/{id}', 'Coffe\CartController@DeleteItemListCart');

        Route::get('Save-Item-List-Cart/{id}/{quanty}', 'Coffe\CartController@SaveItemListCart');

//checkout
        Route::get('checkout', 'Coffe\CheckoutController@showCheckout')->name('show-checkout');

   
 ?> 