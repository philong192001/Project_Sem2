<?php

namespace App\Http\Controllers\Coffe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function ShowProduct()
    {
    	return view('pageCoffe.productDetail');
    }
}
