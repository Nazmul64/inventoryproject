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

  public function insert(Request $request)
  {
    $att_date=$request->att_date;
    $check=Attendence::where('att_date',$att_date)->first();
    if($check){
      return back()->with('error',' Today Attendence alreday  Successfully Taken');
    }else{
      foreach($request->user_id as $id){
        $data []=[
          'user_id'=> $id,
          'attendence'=>$request->attendence[$id],
          'att_date'=>$request->att_date,
          'att_year'=>$request->att_year,
          'edit_date'=>date('d_m_y'),

        ];
     }

    Attendence::insert($data);
    return back()->with('success','Attendence Successfully Taken');
    }

  }

  public function allattendence(){
    $attendence_view=Attendence::select('edit_date')->groupBy('edit_date')->get();
    return view('backend.attendence.attendeces_check',compact('attendence_view'));
  }
  public function editattendence($edit_date)
  {
    return response()->json($edit_date);
  }
  }

