<?php

namespace App\Http\Controllers\Coffe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showHome(Request $request)
    {
    	return view('pageCoffe.home');
    }
}
