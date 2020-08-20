<?php

namespace App\Http\Controllers\Coffe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class MenuController extends Controller
{
    public function showMenu()
    {
    	 $blogList = DB::table('blogs')
		->leftJoin('users', 'users.id', '=', 'blogs.id_user')
		->select('blogs.*', 'users.name')->paginate(3);

    	$products = DB::table('products')->paginate(8);
    	return view('pageCoffe.menu',compact('products','blogList'));
    }
}
