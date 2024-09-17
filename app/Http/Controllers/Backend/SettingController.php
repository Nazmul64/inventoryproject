<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function setting(){
        return view('backend.settings.added');
    }
    public function settingstore(Request $request) {
        $request->validate([
            'company_name' => 'required',
            'company_address' => 'required',
            'company_email' => 'required',
            'company_phone' => 'required',
            'company_mobile' => 'required',
            'company_city' => 'required',
            'company_country' => 'required',
            'company_sipcode' => 'required',
            'photo' => 'required', // Ensure it's an image
        ]);

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . '_settings.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/settings'), $filename);
        }

        Setting::create([
            'company_name' => $request->company_name,
            'company_address' => $request->company_address,
            'company_email' => $request->company_email,
            'company_phone' => $request->company_phone,
            'company_mobile' => $request->company_mobile,
            'company_city' => $request->company_city,
            'company_country' => $request->company_country,
            'company_sipcode' => $request->company_sipcode,
            'photo' => $filename,
        ]);

        return back()->with('success', 'Data Inserted Successfully!');
    }
public function index(){
    $settngs=Setting::all();
    return view('backend.settings.index',compact('settngs'));
}

public function edit($id){
    $edit_data=Setting::find($id);
    return view('backend.settings.edit',compact('edit_data'));
}
public function update(Request $request,$id){
    $update_data= Setting::find($id);
    if($request->hasFile('new_photo')){
        unlink('uploads/settings/'.Setting::find($id)->photo);
        $file = $request->file('new_photo');
        $path = "uploads/settings/";
        $new_photo = time() . '.' . $file->getClientOriginalExtension();
        $file->move($path, $new_photo); // Corrected move() method

        $awesome = Setting::find($id);
        $awesome->update([
            'photo' => $new_photo,
        ]);
       }
    $update_data->update([
        'company_name' => $request->company_name,
            'company_address' => $request->company_address,
            'company_email' => $request->company_email,
            'company_phone' => $request->company_phone,
            'company_mobile' => $request->company_mobile,
            'company_city' => $request->company_city,
            'company_country' => $request->company_country,
            'company_sipcode' => $request->company_sipcode,
    ]);
    return back()->with('success', 'Data Update Successfully!');
}
}

