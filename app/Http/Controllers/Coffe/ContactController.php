<?php

namespace App\Http\Controllers\Coffe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class ContactController extends Controller
{
    public function showContact()
    {
    	$products = DB::table('products')->paginate(8);
    	return view('pageCoffe.contact');
    }
}
