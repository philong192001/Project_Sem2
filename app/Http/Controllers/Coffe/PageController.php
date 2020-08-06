<?php

namespace App\Http\Controllers\Coffe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
class PageController extends Controller
{
    public function showHome(Request $request)
    {
    	// $new_product = Product::where('status',1)->paginate(6);

     //    $categoryProduct = Category::where('status', 1)->get();
    	
        return view('pageCoffe.home');
    }

}
