<?php

namespace App\Http\Controllers\Coffe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use DB;
class PageController extends Controller
{
    public function showHome(Request $request)
    {
    	//$categories = Category::where('parent_id',0)->get();
    	$products = DB::table('products')->paginate(8);
        return view('pageCoffe.home', compact('products'));
    }
    public function CategoryDetails($type)
    {
    	$categoryList = Product::where('id_category',$type)->get();
    	$NameCategory = Category::where('id',$type)->first();
    	return view('pageCoffe.shop',compact('categoryList','NameCategory'));
    }

}
