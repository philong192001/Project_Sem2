<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function loginAdmin()
    {
    	if (auth()->check()) {
    		return redirect()->to('homeadmin');
    	}
    	//dd(bcrypt('phivanlong'));
    	return view('login');
    }
    public function postloginAdmin(Request $request)
    {
    	//dd($request->has('remember_me'));
    	$remember = $request->has('remember_me')? true : false;
    	if (auth()->attempt([
    		'email'=> $request->email,
    		'password'=>$request->password
    	],$remember)) {
    		return redirect()->to('homeadmin');
    	}
    	//dd($request->all());
    }
     public function logout()
    {
        Auth()->logout();
        return redirect()->route('admin.login');
    }
}
