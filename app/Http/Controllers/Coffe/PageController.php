<?php

namespace App\Http\Controllers\Coffe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Bill;
use App\Feedback;
use DB;
class PageController extends Controller
{
    public function showHome(Request $request)
    {
    	//$categories = Category::where('parent_id',0)->get();

    	// $products = DB::table('products')->orderby(DB::raw('RAND()'))->paginate(8);
     //    return view('pageCoffe.home', compact('products'));

    	$products = DB::table('products')->take(8)->get();
        $new_products = Product::latest()->take(8)->get();
        $quantity_product = Product::count();
        $quantity_category = Category::count();
        $quantity_order = Bill::count();
        $quantity_feedback = Feedback::count();
        return view('pageCoffe.home', compact('products','new_products','quantity_product','quantity_category','quantity_order','quantity_feedback'));

    }
    
    public function CategoryDetails($type)
    {
    	$categoryList = Product::where('id_category',$type)->get();
    	$NameCategory = Category::where('id',$type)->first();
    	return view('pageCoffe.shop',compact('categoryList','NameCategory'));
    }

}
