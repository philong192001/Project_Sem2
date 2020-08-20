<?php

namespace App\Http\Controllers\Coffe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Product;
use App\Category;
use App\Bill;
use App\Feedback;
use DB;
class PageController extends Controller
{
    public function showHome(Request $request)
    {

    	
        $blogList = DB::table('blogs')
        ->leftJoin('users', 'users.id', '=', 'blogs.id_user')
        ->select('blogs.*', 'users.name')->paginate(3);

        $feedback = DB::table('feedback')
        ->leftJoin('users', 'users.id', '=', 'feedback.id_user')
        ->select('feedback.*', 'users.name')->take(5)->get();

        //$feedback = DB::table('feedback')->take(5)->get();

    	$products = DB::table('products')->take(8)->get();
        $new_products = Product::latest()->take(8)->get();
        $quantity_product = Product::count();
        $quantity_category = Category::count();
        $quantity_order = Bill::count();
        $quantity_feedback = Feedback::count();
        return view('pageCoffe.home', compact( 'feedback','products','new_products','quantity_product','quantity_category','quantity_order','quantity_feedback','blogList'));

    }

       public function showPostContact(Request $req)
    {
        

        $test = Feedback::create([
            'id_user'=>Auth::id(),
            'content'=>$req->content,
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
       
        ]);
        return redirect()->back();
    } 

    
    public function CategoryDetails($type)
    {
        $blogList = DB::table('blogs')
        ->leftJoin('users', 'users.id', '=', 'blogs.id_user')
        ->select('blogs.*', 'users.name')->get();

    	$categoryList = Product::where('id_category',$type)->get();
    	$NameCategory = Category::where('id',$type)->first();
    	return view('pageCoffe.shop',compact('categoryList','NameCategory','blogList'));
    }

    function getSearchAjax(Request $request)
    {
        if($request->get('query'))
        {
            $query = $request->get('query');
            $data = DB::table('products')
            ->where('name_product', 'LIKE', "%{$query}%")
            ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
            foreach($data as $row)
            {
               $output .= '
               <li><a style="position: absolute;margin-left:50px;width="130%";" href="chi-tiet/'. $row->id .'">'.$row->name_product.'</a></li>
               <li><img width="50" height ="50" src="'.$row->link_image.'"></img></li>
               '; 
           }
           $output .= '</ul>';
           echo $output;
       }
    }
     

}
