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
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
	\UniSharp\LaravelFilemanager\Lfm::routes();
});
Route::get('/', 'Admin\AdminController@loginAdmin')->name('admin.login');
Route::post('/', 'Admin\AdminController@postloginAdmin');

Route::get('/register-user','Admin\AdminController@RegisterUser')->name('register.user');
Route::get('/admin', 'Admin\AdminController@loginAdmin');
Route::post('/admin', 'Admin\AdminController@postloginAdmin');

Route::get('/homeadmin', function () {
	return view('admin.home');
});
Route::get('/logout', [
	'as' => 'admin.logout',
	'uses' => 'Admin\AdminController@logout'
]);
Auth::routes();


// View::composer('header', function( $view )
// {
//     $data = Category::where('status', 1)->get();
//     $view->with( 'data', $data ?? '' );
// });

