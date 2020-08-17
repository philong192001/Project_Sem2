<?php

namespace App\Http\Controllers\Coffe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class BlogController extends Controller
{
     public function showBlog()
     {
        $blogList = DB::table('blogs')
            ->leftJoin('users', 'users.id', '=', 'blogs.id_user')
            ->select('blogs.*', 'users.name')->get();
            //dd($blogList);
     	return view('pageCoffe.blog', compact('blogList'));
     }
}
