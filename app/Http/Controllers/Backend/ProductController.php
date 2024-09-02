<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Suppliers;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function added(){
        $suplier=Suppliers::all();
        $categroy=Category::all();
        return view("backend.products.added",compact('categroy','suplier'));
    }
    public function productstore(Request $request){
        $request->validate([
            'product_name'=> 'required',
            'category_id'=> 'required',
            'supplier_id'=> 'required',
            'product_code'=> 'required',
            'product_garage'=> 'required',
            'product_route'=> 'required',
            'buy_date'=> 'required',
            'expire_date'=> 'required',
            'buying_price'=> 'required',
            'selling_price'=> 'required',
            'product_image'=> 'required',
        ]);
        if ($request->hasFile('product_image')) {
            $file = $request->file('product_image');
            $filename = time() . 'product.' . $file->getClientOriginalExtension();
            $path = "uploads/product";
            $file->move($path, $filename);
        }
        Product::create([
            'product_name'=> $request->product_name,
            'category_id'=> $request->category_id,
            'supplier_id'=> $request->supplier_id,
            'product_code'=> $request->product_code,
            'product_garage'=> $request->product_garage,
            'product_route'=> $request->product_route,
            'buy_date'=> $request->buy_date,
            'expire_date'=> $request->expire_date,
            'buying_price'=> $request->buying_price,
            'selling_price'=> $request->selling_price,
            'product_image'=>$filename,
        ]);
        return back()->with('success','Data Insert successfully!');
    }
}
