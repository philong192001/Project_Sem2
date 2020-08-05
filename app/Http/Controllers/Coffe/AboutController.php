<?php

namespace App\Http\Controllers\Coffe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function showAbout()
    {
    	return view('pageCoffe.about');
    }
}
