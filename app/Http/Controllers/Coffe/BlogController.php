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

	public function showBlogDetail(Request $req, $id)
	{
		$blogDetail = DB::table('blogs')->where('id', $req->id)->first();

		$blogList = DB::table('blogs')
		->leftJoin('users', 'users.id', '=', 'blogs.id_user')
		->select('blogs.*', 'users.name')->paginate(3);
        
		return view('pageCoffe.blog-detail',compact('blogDetail', 'blogList'));
	}
}
