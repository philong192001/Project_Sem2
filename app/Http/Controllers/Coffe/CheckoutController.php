<?php

namespace App\Http\Controllers\Coffe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class CheckoutController extends Controller
{
    public function showCheckout()
    {
    	$products = DB::table('products')->paginate(8);
    	return view('pageCoffe.checkout', compact('products'));
    }
}
