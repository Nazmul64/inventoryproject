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
  public function edit($id){
     $edit_data=Suppliers::find($id);
     return view('backend.suppliers.edit',compact('edit_data'));
  }
public function update(Request $request, $id){
    $update_data= Suppliers::find($id);
    if($request->hasFile('new_photo')){
        unlink('uploads/supplicers/'.Suppliers::find($id)->photo);
        $file = $request->file('new_photo');
        $path = "uploads/supplicers/";
        $new_photo = time() . '.' . $file->getClientOriginalExtension();
        $file->move($path, $new_photo); // Corrected move() method

        $awesome = Suppliers::find($id);
        $awesome->update([
            'photo' => $new_photo,
        ]);
       }
    $update_data->update([
        'name'=> $request['name'],
        'email'=> $request['email'],
        'phone'=> $request['phone'],
        'address'=> $request['address'],
        'type'=> $request['type'],
        'shop'=> $request['shop'],
        'accoundholder'=> $request['accoundholder'],
        'accountnumber'=> $request['accountnumber'],
        'bankname'=> $request['bankname'],
        'branchname'=> $request['branchname'],
        'city'=> $request['city'],
    ]);
    return back()->with('success','Data Edit Successfully!');
}
public function view($id){
    $view = Suppliers::find($id);
    return view('backend.suppliers.view',compact('view'));
}
public function delete($id){
    $delete_data = Suppliers::find($id);
    $delete_data->delete();
    return back()->with('success','Data Delete Successfully!');
}
}
