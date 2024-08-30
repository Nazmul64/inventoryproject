<?php declare(strict_types=1);

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function view(){
        $user =User::all();
       return view('backend.user.user',compact('user'));
    }
 function add(){
    return view('backend.user.add');
 }
 function store(Request $request){
   $request->validate([
     'usertype' =>'required',
     'name' =>'required',
     'email' =>'required',
     'password' =>'required',
     'confirma_password' =>'required',
   ]);
  User::create([
    'usertype'=>$request->usertype,
    'name'=>$request->name,
    'email'=>$request->email,
    'password'=>bcrypt($request->password),
  ]);
  return redirect()->route('user.view');
 }
 function edit($id){
    $edit =User::find($id);
   return view('backend.user.edit',compact('edit'));
 }
 function update(Request $request, $id){
    User::find($id)->update([
    'usertype'=>$request->usertype,
    'name'=>$request->name,
    'email'=>$request->email,
    ]);
    return back()->with('success','Data update successful');
}
function delete($id){
  User::find($id)->delete();
  return back()->with('success','Data deleted successfully');
 
}
}
