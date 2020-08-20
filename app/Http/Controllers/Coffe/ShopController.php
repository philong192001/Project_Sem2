<?php

namespace App\Http\Controllers\Coffe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Category;
use App\Product;

class ShopController extends Controller
{
    public function showShop()
    { 
    	$blogList = DB::table('blogs')
		->leftJoin('users', 'users.id', '=', 'blogs.id_user')
		->select('blogs.*', 'users.name')->paginate(3);


    	$products = DB::table('products')->orderby(DB::raw('RAND()'))->paginate(8);
    	return view('pageCoffe.shop' , compact('products', 'blogList'));
    }
    
}
