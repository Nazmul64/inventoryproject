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
    // Cart::add($data);
    // return back()->with('success','Added Cart');
  }
}
