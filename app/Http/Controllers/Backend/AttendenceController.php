<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Attendence;
use App\Models\employees;
use Illuminate\Http\Request;

class AttendenceController extends Controller
{
  public function takeadendence(){
    $employess=employees::get();
    return view("backend.attendence.attendences_view",compact('employess'));
  }
  public function insert(){
    Attendence::create([
        'att_date'=>request('att_date'),
        'att_year'=>request('att_year'),
    ]);
    return redirect('take.attendence')->with('success','Data Insrt Successfully!');
  }
}
