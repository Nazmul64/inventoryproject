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
    return view('backend.Advancesalary.added',compact('employee'));
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
    return back()->with('error',' !Opps This salary record already exists for the selected month');
 }
}
public function show(){
    $salary=Advancesalarices::join('employees','advancesalarices.emp_id','employees.id')
    ->select('advancesalarices.*','employees.name1','employees.salary','employees.photo')->orderBy('id','DESC')->get();
    return view('backend.Advancesalary.all_advancesalaray',compact('salary'));
}
public function SalaryPay()
{
    // $month = date("F", strtotime('-1 month'));
    // $main_salary = Advancesalarices::join('employees', 'advancesalarices.emp_id', 'employees.id')
    // ->select('advancesalarices.*', 'employees.name1', 'employees.salary', 'employees.photo')
    // ->where('month', $month)
    // ->get();
    $employees =employees::get();
    return view('backend.Advancesalary.paysalary', compact('employees'));

}
public function SalaryPayedit($id){
    $edit_data = employees::join('advancesalarices', 'advancesalarices.emp_id', '=', 'employees.id')
        ->select('employees.*', 'advancesalarices.month')
        ->where('advancesalarices.id', $id)
        ->first();
    return view('backend.Advancesalary.edit', compact('edit_data'));
}
public function SalaryPayupdate(Request $request,$id){
    $request->validate([
        'name'=> 'required',
        'month'=> 'required',
        'salary'=> 'required',
        'photo'=> 'required',
    ]);
    if($request->hasFile('new_photo')){
        unlink('uploads/employees/'.employees::find($id)->photo);
        $file = $request->file('new_photo');
        $path = "uploads/customer/";
        $new_photo = time() . '.' . $file->getClientOriginalExtension();
        $file->move($path, $new_photo);

       }
    $edit_update=employees::join('advancesalarices','advancesalarices.epm_id','employees.id')
    ->select('employees.*', 'advancesalarices.month')
    ->where('advancesalarices.id', $id)
    ->first();
    $edit_update->update([
       'name1'=>$request->name1,
       'salary'=>$request->salary,
       'month'=>$request->month,
       'photo'=>$new_photo,
    ]);

    return back()->with('error','Data Update Successfully!');
}
}

