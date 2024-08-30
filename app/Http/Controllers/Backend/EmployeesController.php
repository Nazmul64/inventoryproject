<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\employees;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function add(){
        return view('backend.employees.employees_add');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name1' => 'required',
            'email' => 'required|string|email|max:255|unique:employees',
            'phone' => 'required|numeric',
            'address' => 'required',
            'experience' => 'required',
            'salary' => 'required',
            'vacation' => 'required',
            'city' => 'required',
            'nid_no' => 'required|integer',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $filename = null;
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $path = "uploads/employees";
            $file->move($path, $filename);
        }

        employees::create([
            'name1' => $request['name1'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'address' => $request['address'],
            'experience' => $request['experience'],
            'salary' => $request['salary'],
            'vacation' => $request['vacation'],
            'city' => $request['city'],
            'nid_no' => $request['nid_no'],
            'photo' => $filename,
        ]);

        return back()->with('success','Data Insert Successfully!');
    }
    public function view(){
        $user=employees::all();
        return view('backend.employees.all_employees',compact('user'));
    }
   public function edit(Request $request, $id){
     $edit_data= employees::find($id);
     return view('backend.employees.edit',compact('edit_data'));
   }
public function update(Request $request, $id){
    $update_data= employees::find($id);
    if($request->hasFile('new_photo')){
        unlink('uploads/employees/'.employees::find($id)->photo);
        $file = $request->file('new_photo');
        $path = "uploads/employees/";
        $new_photo = time() . '.' . $file->getClientOriginalExtension();
        $file->move($path, $new_photo); // Corrected move() method

        $awesome = employees::find($id);
        $awesome->update([
            'photo' => $new_photo,
        ]);
       }
    $update_data->update([
        'name1'=> $request['name1'],
        'email'=> $request['email'],
        'phone'=> $request['phone'],
        'address'=> $request['address'],
        'experience'=> $request['experience'],
        'salary'=> $request['salary'],
        'vacation'=> $request['vacation'],
        'city'=> $request['city'],
        'nid_no'=> $request['nid_no'],
    ]);
    return back()->with('success','Data Edit Successfully!');
}
public function delete(Request $request, $id){
    $delete_data=Employees::find($id);
    $delete_data->delete();
    return back()->with('success','Data Delete Successfully!');
}
public function deteailsview($id){
    $view=Employees::where('id',$id)->first();
    return view('backend.employees.view',compact('view'));
}

}
