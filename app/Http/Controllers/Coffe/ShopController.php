<?php

namespace App\Http\Controllers\Coffe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class ShopController extends Controller
{
    public function showShop()
    { 
    	$products = DB::table('products')->paginate(8);
    	return view('pageCoffe.shop' , compact('products'));
    }

    
}
