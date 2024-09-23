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
  public function createInvoice (Request $request)
{
    $request->validate([
        'customer_id'=>'required',
    ]);
    $customer_id=$request->customer_id;
    $customer=DB::table('customers')->where('id',$customer_id)->first();
    $contents=Cart::content();
   return view('backend.posmain.invoices',compact('contents','customer'));
}

public function finalinvoices(Request $request){
    $data = array();
    $data['customer_id'] = $request->customer_id;
    $data['order_date'] = $request->order_date;
    $data['order_status'] = $request->order_status;
    $data['total_product'] = $request->total_product;
    $data['sub_total'] = $request->sub_total;
    $data['vat'] = $request->vat;
    $data['total'] = $request->total;
    $data['payment_status'] = $request->payment_status;
    $data['pay'] = $request->pay;
    $data['due'] = $request->due;

    $order_id = DB::table('orders')->insertGetId($data);

    $content = Cart::content();
    $odata = array();

    foreach ($content as $contents) {
        $odata['order_id'] = $order_id;
        $odata['product_id'] = $contents->id;
        $odata['quantity'] = $contents->qty;
        $odata['unitcost'] = $contents->price;
        $odata['total'] = $contents->total;

        DB::table('orderdetails')->insert($odata);
    }

    Cart::destroy();

    return back()->with('success', 'Data inserted successfully!');

}


}
