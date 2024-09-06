<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Expeness;
use App\Models\Expenses;
use Illuminate\Http\Request;

class ExpensessController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function Addexpenses(){
        return view('backend.Expenses.added');
    }
public function expenses(Request $request){
    $request->validate([
        'details' => 'required',
        'amount' => 'required',
        'ofyear' => 'required',
    ]);

    Expenses::create([
        'details' => $request->details,
        'amount' => $request->amount,
        'month' => $request->month,
        'date' => date('Y-m-d'),
        'ofyear'=> $request->ofyear,
    ]);

    return back()->with('success', 'Data inserted successfully!');
}
public function todayexpenses(){
   $date =date('Y-m-d');
   $today =Expenses::where('date',$date)->get();
   $expenses_total_coust=Expenses::where('date',$date)->sum('amount');
  return view('backend.Expenses.today_expenses',compact('today','expenses_total_coust'));
}
public function edit($id){
    $expenses = Expenses::find($id);
    return view('backend.Expenses.edit',compact('expenses'));
}
public function updateexpenses(Request $request,$id){
    Expenses::find($id)->update([
        'details'=> $request->details,
        'amount'=> $request->amount,
    ]);
    return back()->with('success', 'Data Update successfully!');
}
public function lastmonth(){
    $month=date('F');
    $this_month=Expenses::where('month',$month)->get();
    return view('backend.Expenses.this_month',compact('this_month'));
}
public function delete($id){
    $delte = Expenses::find($id);
    $delte->delete();
    return back()->with('success', 'Data Delete successfully!');
}
public function yearlay(){

    $ofyear = date('Y');
    $total_coust = Expenses::where('ofyear', $ofyear)->get();
    return view('backend.Expenses.yearlay', ['total_coust' => $total_coust]);
}
public function january(){
    $month = date('F');
    $this_month = Expenses::where('month', $month)->get();
    return view('backend.Expenses.this_month',compact('this_month'));
}
public function February(){
    $month = date('F');
    $this_month = Expenses::where('month', $month)->get();
    return view('backend.Expenses.this_month',compact('this_month'));
}
public function March(){
    $month = date('F');
    $this_month = Expenses::where('month', $month)->get();
    return view('backend.Expenses.this_month',compact('this_month'));
}
public function April(){
    $month = date('F');
    $this_month = Expenses::where('month', $month)->get();
    return view('backend.Expenses.this_month',compact('this_month'));
}
public function May(){
    $month = date('F');
    $this_month = Expenses::where('month', $month)->get();
    return view('backend.Expenses.this_month',compact('this_month'));
}
public function June(){
    $month = date('F');
    $this_month = Expenses::where('month', $month)->get();
    return view('backend.Expenses.this_month',compact('this_month'));
}
public function July(){
    $month = date('F');
    $this_month = Expenses::where('month', $month)->get();
    return view('backend.Expenses.this_month',compact('this_month'));
}
public function August(){
    $month = date('F');
    $this_month = Expenses::where('month', $month)->get();
    return view('backend.Expenses.this_month',compact('this_month'));
}
public function Septeber(){
    $month = date('F');
    $this_month = Expenses::where('month', $month)->get();
    return view('backend.Expenses.this_month',compact('this_month'));
}
public function October(){
    $month = date('F');
    $this_month = Expenses::where('month', $month)->get();
    return view('backend.Expenses.this_month',compact('this_month'));
}
public function November(){
    $month = date('F');
    $this_month = Expenses::where('month', $month)->get();
    return view('backend.Expenses.this_month',compact('this_month'));
}
public function December(){
    $month = date('F');
    $this_month = Expenses::where('month', $month)->get();
    return view('backend.Expenses.this_month',compact('this_month'));
}


}
