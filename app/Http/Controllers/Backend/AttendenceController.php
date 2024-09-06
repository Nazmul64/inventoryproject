<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Attendence;
use App\Models\employees;
use Illuminate\Http\Request;

class AttendenceController extends Controller
{
  public function takeadendence(){
    $employess=employees::all();
    return view("backend.attendence.attendences_view",compact('employess'));
  }
  public function insert(Request $request){
   $data =array();
   $data['att_date'] = $request->input('att_date');
   $data['att_year']=$request->input('att_year');
   echo "<pre>";
   print_r($data);

  }
  public function allattendence(){
//    $attdenec =Attendence::get();
  dd('ok');
  }
}
