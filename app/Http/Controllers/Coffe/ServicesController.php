<?php

namespace App\Http\Controllers\Coffe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class ServicesController extends Controller
{
    public function showServices()
    {
    	 $blogList = DB::table('blogs')
        ->leftJoin('users', 'users.id', '=', 'blogs.id_user')
        ->select('blogs.*', 'users.name')->get();
    	return view('pageCoffe.services', compact('blogList'));
    }
}
