<?php

namespace App\Http\Controllers\Coffe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{
    public function ShowProduct(Request $req, $id)
    {
        
        
        $proSingle = DB::table('products')->where('id', $req->id)->first();

    	$products = DB::table('products')->orderby(DB::raw('RAND()'))->paginate(8);

    	return view('pageCoffe.productDetail', compact('products', 'proSingle'));
    }
}
