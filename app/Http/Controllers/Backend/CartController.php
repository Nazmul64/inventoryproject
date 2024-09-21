<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Gloudemans\Shoppingcart\Facades\Cart;
class CartController extends Controller
{
  public  function index(Request $request){
    $data=array();
    $data['id']=$request->id;
    $data['name']=$request->name;
    $data['price']=$request->price;
    $data['qty']=$request->qty;
    Cart::add($data);
    return back()->with('success','Added Cart');
  }
  public function cartupdate(Request $request,$rowId){
    $qty['qty']=$request->qty;
    Cart::update($rowId, $qty);
    return back()->with('success','Update Successfully');
  }
  public function cartremove($rowId){
    Cart::remove($rowId);
    return back()->with('success','Remove  Successfully');
  }
  public function createinvoices(Request $request)
{
    $request->validate([
        'customer_id'=>'required',
    ]);
    $customer_id=$request->customer_id;
    $customer=DB::table('customers')->where('id',$customer_id)->first();
    $contents=Cart::content();
   return view('backend.posmain.invoices',compact('contents','customer'));
}


}
