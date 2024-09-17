<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Attendence;
use App\Models\employees;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\select;

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
          'month'=>$request->month,
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
    $employess=DB::table('attendences')->where('edit_date',$edit_date)->first();
    $employess=DB::table('attendences')->join('employees','attendences.user_id','employees.id')->select('employees.name1','employees.photo','attendences.*')->where('edit_date',$edit_date)->get();
    return view('backend.attendence.edit',compact('employess','employess'));
  }
 public function updateattendence(Request $request){
    foreach($request->id as $id){
        $data =[
            'attendence'=>$request->attendence[$id],
            'att_date'=>$request->att_date,
            'att_year'=>$request->att_year,
            'month'=>$request->month,

        ];

        $attendence=Attendence::find($id);
        $attendence->update([$data]);
        }
        return back()->with('success','Successfully Update Attendence');
     }

 }


