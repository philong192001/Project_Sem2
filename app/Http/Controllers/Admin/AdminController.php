<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Hash;

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
    public function RegisterUser()
    {
        return view('register');
    }
    public function postRegisterUser(RegisterRequest $request)
    {
        $user = new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password = Hash::make($request->password);
        $user->birthday = $request->birthday;
        $user->gender = $request->gender;
        $user->address = $request->address;
        $user->district = $request->district;
        $user->city = $request->city;
        $user->CMTND = $request->CMTND;
        $user->phone = $request->phone;      
        $user->save();
        $alert = 'Bạn đã đăng kí tài khoản thành công';
        return redirect()->route('admin.login')->with('alert', $alert);
    }
}
