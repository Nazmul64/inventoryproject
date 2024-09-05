<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Expenses;
use Illuminate\Http\Request;

class ExpensesController extends Controller
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
        'year' => 'required',
    ]);

   $text=Expenses::create([
        'details' => $request->details,
        'amount' => $request->amount,
        'month' => $request->month,
        'date' => $request->date,
        'year'=> $request->year,
    ]);

    return back()->with('success', 'Data inserted successfully!');
}
}
