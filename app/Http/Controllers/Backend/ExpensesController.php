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
public function storeexpenses(Request $request){
    $request->validate([
        'details' => 'required',
        'amount' => 'required',
        'year' => 'required',
    ]);

    Expenses::create([
        'details' => $request->details,
        'amount' => $request->amount,
        'month' => $request->month,
        'date' => $request->date,
        'year'=> $request->year, // Ensure this is being passed
    ]);

    return back()->with('success', 'Data inserted successfully!');
}
}
