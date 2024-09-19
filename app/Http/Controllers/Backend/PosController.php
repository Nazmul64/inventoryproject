<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PosController extends Controller
{
    public function index(){
        $product=DB::table('products')->join('categories','products.category_id','categories.id')
        ->select('categories.cat_name','products.*')->get();
        $customer=Customer::all();
        $category=Category::get();
        return view('backend.posmain.index',compact('product','customer','category'));
    }
}
