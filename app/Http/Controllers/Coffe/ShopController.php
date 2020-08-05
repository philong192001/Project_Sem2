<?php

namespace App\Http\Controllers\Coffe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function showShop()
    {
    	return view('pageCoffe.shop');
    }
}
