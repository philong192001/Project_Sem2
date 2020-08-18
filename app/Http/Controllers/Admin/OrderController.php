<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Bill;
use App\BillDetail;
use App\User;

class OrderController extends Controller
{
    public function index()
    {
    	$Bill = Bill::leftJoin('users','users.id', '=','bills.id_user')
		->select('bills.*','users.fullname')->latest()->paginate(5);
		
    	return view('admin.order.index',compact('Bill'));
    }
    public function getDelivery(Request $req)
    {
    	$bill_delivery = Bill::find($req->id);
        $bill_delivery->status = 'Đã Giao Hàng';
        $bill_delivery->save();      
        return redirect()->back();
    }
     public function getBillDetail(Request $req){
        $crr_bill = Bill::where('id',$req->id)->first();
        $crr_customer = User::where('id',$crr_bill->id_user)->first();
        // $crr_bill_detail = BillDetail::where('id',$crr_bill->id)->paginate(4);

        return view('admin.order.bill_detail',compact('crr_bill','crr_customer'));

    }
}
