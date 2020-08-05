<?php

namespace App\Http\Controllers\Coffe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function showCheckout()
    {
    	return view('pageCoffe.checkout');
    }
}
