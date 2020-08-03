<?php

use Illuminate\Support\Facades\Route;
// use App\Category;
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

Route::get('/', function () {
    return view('welcome');
});






Auth::routes();


// View::composer('header', function( $view )
// {
//     $data = Category::where('status', 1)->get();
//     $view->with( 'data', $data ?? '' );
// });

