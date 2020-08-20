<?php

namespace App\Http\Controllers\Coffe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use DB;

class ProductController extends Controller
{
	public function ShowProduct(Request $req, $id)
	{
		 $blogList = DB::table('blogs')
        ->leftJoin('users', 'users.id', '=', 'blogs.id_user')
        ->select('blogs.*', 'users.name')->paginate(3);


    	$products = DB::table('products')->orderby(DB::raw('RAND()'))->paginate(8);


		$proSingle = DB::table('products')->where('id', $req->id)->first();

		$Recommand_Products = Product::latest()->take(4)->get();

		return view('pageCoffe.productDetail', compact('Recommand_Products', 'proSingle', 'blogList'));
	}
}
