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
      $data = [];

      foreach ($request->user_id as $id) {
          $data[] = [
              'user_id'    => $id,
              'attendence' => $request->attendence[$id],
              'att_date'   => $request->att_date, // Only one date, not per user
              'att_year'   => $request->att_year, // Only one year, not per user
              'edit_date'  => date('d_m_y'),
          ];
      }

      $att = Attendence::create($data);

      if ($att) {
          return back()->with('success', 'Successfully Attendance Taken');
      } else {
          return back()->with('error', 'Error while taking attendance');
      }
  }

  public function allattendence(){
//    $attdenec =Attendence::get();
  dd('ok');
  }
}
