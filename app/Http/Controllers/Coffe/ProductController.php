<?php

namespace App\Http\Controllers\Coffe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Product;

class ProductController extends Controller
{
    public function ShowProduct(Request $req, $id)
    {
        
        
        //$proSingle = DB::table('products')->where('id', $req->id)->first();
        
        $product = Product::where('id', $req->id)->first();
        //dd($product);

    	$products = DB::table('products')->paginate(8);

    	return view('pageCoffe.productDetail', compact('products', 'product'));
    }
}
