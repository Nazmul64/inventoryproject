<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function added(){
        return view("backend.category.added");
    }
public function store(Request $request){
    $request->validate([
        'cat_name'=>'required',
    ]);
    Category::create([
        'cat_name'=> $request->cat_name,
    ]);
    return back()->with('success','Data Insert Successfully!');
}
public function index(){
    $user=Category::get();
    return view('backend.category.index',compact(('user')));
}
public function categoryedit($id){
    $edit_data=Category::find($id);
    return view('backend.category.edite',compact(('edit_data')));
}
public function update(Request $request, $id){
    $request->validate([
       'cat_name'=> 'required',
    ]);
    Category::find($id)->update([
        'cat_name'=> $request->cat_name,
    ]);
    return back()->with('success','Data Edit Successfully!');
}
public function delete($id){
    $delete_data=Category::find($id);
    $delete_data->delete();
    return back()->with('success','Data delete Successfully!');
}
}
