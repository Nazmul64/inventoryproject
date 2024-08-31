<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Suppliers;
use Illuminate\Http\Request;

class SuppliersController extends Controller
{
  public function add(){
     return view("backend.suppliers.added");
  }
  public function store (Request $request){
    $request->validate([
        "name"=> "required",
        "email"=> "required",
        "phone"=> "required",
        "address"=> "required",
        "type"=> "required",
        "shop"=> "required",
        "photo"=> "required",
        "accoundholder"=> "required",
        "accountnumber"=> "required",
        "bankname"=> "required",
        "branchname"=> "required",
        "city"=> "required",
    ]);
    if ($request->hasFile('photo')) {
        $file = $request->file('photo');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $path = "uploads/supplicers";
        $file->move($path, $filename);
    }
    Suppliers::create([
        'name' => $request['name'],
        'email' => $request['email'],
        'phone' => $request['phone'],
        'address' => $request['address'],
        'type' => $request['type'],
        'shop' => $request['shop'],
        'accoundholder' => $request['accoundholder'],
        'accountnumber' => $request['accountnumber'],
        'bankname' => $request['bankname'],
        'branchname' => $request['branchname'],
        'city' => $request['city'],
        'photo' => $filename,
    ]);

    return back()->with('success','Data Insert Successfully!');
  }
  public function index(){
     $user=Suppliers::all();
     return view('backend.suppliers.index',compact('user'));
  }
}
