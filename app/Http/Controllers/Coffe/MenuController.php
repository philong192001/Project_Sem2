<?php

namespace App\Http\Controllers\Coffe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function showMenu()
    {
    	return view('pageCoffe.menu');
    }
}
