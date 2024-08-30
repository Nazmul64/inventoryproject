<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
public function add(){
    return view('backend.customer.added');
}
public function store(Request $request){
    $request->validate([
        'username' => 'required',
        'email' => 'required|string|email|max:255',
        'phone' => 'required|numeric',
        'address' => 'required',
        'city' => 'required',
        'shopname' => 'required',
        'accound_holder' => 'required',
        'account_number' => 'required',
        'bank_name' => 'required',
        'bank_branch' => 'required',
        'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    if ($request->hasFile('photo')) {
        $file = $request->file('photo');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $path = "uploads/customer";
        $file->move($path, $filename);
    }
    // if($filename==$filename){
    //     echo "This is write images";
    // }else{
    //     echo "someting worng!";
    // }
    Customer::create([
        'username' => $request['username'],
        'email' => $request['email'],
        'phone' => $request['phone'],
        'address' => $request['address'],
        'shopname' => $request['shopname'],
        'accound_holder' => $request['accound_holder'],
        'account_number' => $request['account_number'],
        'city' => $request['city'],
        'bank_name' => $request['bank_name'],
        'bank_branch' => $request['bank_branch'],
        'photo' => $filename,
    ]);

    return back()->with('success','Data Insert Successfully!');
}
public function index(){
    $user = Customer::all();
    return view('backend.customer.index',compact('user'));
}
public function edit($id){
$edit_data = Customer::find($id);
return view('backend.customer.edit',compact('edit_data'));
}
public function update(Request $request, $id){
    $update_data= Customer::find($id);
    if($request->hasFile('new_photo')){
        unlink('uploads/customer/'.Customer::find($id)->photo);
        $file = $request->file('new_photo');
        $path = "uploads/customer/";
        $new_photo = time() . '.' . $file->getClientOriginalExtension();
        $file->move($path, $new_photo); // Corrected move() method


       }
    $update_data->update([
        'username'=> $request['username'],
        'email'=> $request['email'],
        'phone'=> $request['phone'],
        'address'=> $request['address'],
        'shopname'=> $request['shopname'],
        'accound_holder'=> $request['accound_holder'],
        'account_number'=> $request['account_number'],
        'city'=> $request['city'],
        'bank_name'=> $request['bank_name'],
        'bank_branch'=> $request['bank_branch'],
        'photo' => $new_photo,

    ]);
    return back()->with('success','Data Edit Successfully!');
}
public function delete($id){
   $delete_data = Customer::find($id);
   $delete_data->delete();
   return back()->with('success','Data Delete Successfully!');
}
public function view($id){
  $view = Customer::find($id);
  return view('backend.customer.view',compact('view'));

}
}
