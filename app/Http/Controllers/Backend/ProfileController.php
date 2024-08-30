<?php declare(strict_types=1);

namespace App\Http\Controllers\Backend;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ProfileController extends Controller
{
    function view(){
        $user =User::find(Auth::user()->id);
        return view('backend.profile.view',compact('user'));
    }
function edit($id){
    $edit =User::find(Auth::user()->id);
  return view('backend.profile.edit',compact('edit'));
}
function update(Request $request){
  $request->validate([
    'name' =>'required',
    'email' =>'required',
    'mobile'=>'required',
    'address'=>'required',
    'gender'=>'required',
  //  'image'=>'image|nullable|max:2048',
  ]);
  if(auth::user()->image !=='avator.jepg'){
     unlink('upload/user_images/'.auth::user()->image);
  }
   $file=$request->file('image');
   $fileName=time().'.'.$file->getClientOriginalExtension();
   $path='upload/user_images/';
   $request->image->move($path,$fileName);
   User::find(Auth::user()->id)->update([
    'name'=>$request->name,
    'email'=>$request->email,
    'mobile'=>$request->mobile,
    'address'=>$request->address,
    'gender'=>$request->gender,
    // 'image'=>$fileName,
    ]);
    return back()->with('success','Data update successful');
  }

function passwordview(){
   return view('backend.profile.passview');
}
function passwordupdate(Request $request){
     $request->validate([
            'old_password'=>'required',
            'password' => 'required',
            'new_password_confirmation' => 'required',
        ]);
        if(Hash::check($request->old_password,Auth::user()->password)){
            if($request->password==$request->new_password_confirmation){
               User::find(Auth::id())->update([
                'password'=>Hash::make($request->password),
               ]);
               return back()->with('success','password updated successfully');
            }else{
                return back()->withErrors('New Password Confirm password  Does Not Match In Our Records');
            }
        }else{
             return back()->with('success','Password Confirm Password updated successfully');
        }
}
}

