<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
Route::get('/', 'Admin\AdminController@loginAdmin');
Route::post('/', 'Admin\AdminController@postloginAdmin');
Route::get('/admin', 'Admin\AdminController@loginAdmin');
Route::post('/admin', 'Admin\AdminController@postloginAdmin');

Route::get('/homeadmin', function () {
    return view('admin.home');
});

Route::prefix('admin')->group(function () {
    Route::prefix('categories')->group(function () {
        Route::get('/create',
            [
                'as'   => 'categories.create',
                'uses' => 'Admin\CategoryController@create',
            ]);
        Route::get('/',
            [
                'as'   => 'categories.index',
                'uses' => 'Admin\CategoryController@index',
            ]);
        Route::post('/store',
            [
                'as'   => 'categories.store',
                'uses' => 'Admin\CategoryController@store',
            ]);
        Route::get('/edit/{id}',
            [
                'as'   => 'categories.edit',
                'uses' => 'Admin\CategoryController@edit',
            ]);
        Route::get('/delete/{id}',
            [
                'as'   => 'categories.delete',
                'uses' => 'Admin\CategoryController@delete',
            ]);
        Route::post('/update/{id}',
            [
                'as'   => 'categories.update',
                'uses' => 'Admin\CategoryController@update',
            ]);
    });
//Menu
    Route::prefix('menu')->group(function () {
        Route::get('/',
            [
                'as'   => 'menu.index',
                'uses' => 'Admin\MenuController@index',
            ]);
        Route::get('/create',
            [
                'as'   => 'menu.create',
                'uses' => 'Admin\MenuController@create',
            ]);
        Route::post('/store',
            [
                'as'   => 'menu.store',
                'uses' => 'Admin\MenuController@store',
            ]);
        Route::get('/edit/{id}',
            [
                'as'   => 'menu.edit',
                'uses' => 'Admin\MenuController@edit',
            ]);
        Route::get('/delete/{id}',
            [
                'as'   => 'menu.delete',
                'uses' => 'Admin\MenuController@delete',
            ]);
        Route::post('/update/{id}',
            [
                'as'   => 'menu.update',
                'uses' => 'Admin\MenuController@update',
            ]);
    });
//san pham
    Route::prefix('product')->group(function () {
        Route::get('/',
            [
                'as'   => 'product.index',
                'uses' => 'Admin\ProductController@index',
            ]);
        Route::get('/create',
            [
                'as'   => 'product.create',
                'uses' => 'Admin\ProductController@create',
            ]);
        Route::post('/store',
            [
                'as'   => 'product.store',
                'uses' => 'Admin\ProductController@store',
            ]);
        Route::get('/edit/{id}',
            [
                'as'   => 'product.edit',
                'uses' => 'Admin\ProductController@edit',
            ]);
        Route::get('/delete/{id}',
            [
                'as'   => 'product.delete',
                'uses' => 'Admin\ProductController@delete',
            ]);
        Route::post('/update/{id}',
            [
                'as'   => 'product.update',
                'uses' => 'Admin\ProductController@update',
            ]);
    });
    //setting
    Route::prefix('settings')->group(function () {
        Route::get('/',
            [
                'as'   => 'settings.index',
                'uses' => 'Admin\SettingController@index'
            ]);
        Route::get('/create',
            [
                'as'=>'settings.create',
                'uses'=>'Admin\SettingController@create'
            ]);
        Route::post('/store',
            [
                'as'=>'settings.store',
                'uses'=>'Admin\SettingController@store'
            ]);
        Route::get('/edit/{id}',
            [
                'as'=>'settings.edit',
                'uses'=>'Admin\SettingController@edit'
            ]);
        Route::get('/delete/{id}',
            [
                'as'=>'settings.delete',
                'uses'=>'Admin\SettingController@delete'
            ]);
        Route::post('/update/{id}',
            [
                'as'=>'settings.update',
                'uses'=>'Admin\SettingController@update'
            ]);
    });
 });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
