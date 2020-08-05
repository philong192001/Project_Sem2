<?php

namespace App\Http\Controllers\Coffe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
     public function showBlog()
     {
     	 return view('pageCoffe.blog');
     }
}
