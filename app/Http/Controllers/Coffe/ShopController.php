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
    	// \DB::connection()->enableQueryLog();
    	
    	// $sp_theoloai = Product::where('id_category',$type)->get();
    	//  $chon_loai_sp = Category::where('id_category',$type)->first();
    	
    	// $que = \DB::getQueryLog();
    	// dd($que);
    	$products = DB::table('products')->orderby(DB::raw('RAND()'))->paginate(8);
    	return view('pageCoffe.shop' , compact('products'));
    }
    
}
