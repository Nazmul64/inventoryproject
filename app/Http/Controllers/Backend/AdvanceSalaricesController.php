<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Advancesalarices;
use App\Models\employees;
use Illuminate\Http\Request;

class AdvanceSalaricesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
 public function added(){
    $employee =employees::get();
    return view('backend.Salary.added',compact('employee'));
 }
 public function store(Request $request){
 $emp_id= $request->emp_id;
 $month= $request->month;
 $advance_salary = Advancesalarices::where('month', $month)
 ->where('emp_id', $emp_id)
 ->first();
 if($advance_salary===null){
    $request->validate([
                'emp_id'=> 'required',
                'month'=> 'required',
                'year'=> 'required',
                'advanced_salary'=> 'required',
            ]);
            Advancesalarices::create([
                'emp_id'=> $request->emp_id,
                'month'=> $request->month,
                'year'=> $request->year,
                'advanced_salary'=> $request->advanced_salary,
             ]);
             return back()->with('success','Data Insert Successfully!');
 }else{
    return back()->with('error','This salary record already exists for the selected month');
 }
}
}
