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
    	$products = DB::table('products')->paginate(8);
        return view('pageCoffe.home', compact('products'));
    }

}
