<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expense;

class ExpensesController extends Controller
{
    // public function index()
    // {
    //     $expenses = Expense::all();
    //     return view('expenses.index', compact('expenses')); //expenses.index
    // }

    public function create()
    {
        $expenses = Expense::all();
        return view('expenses.create', compact('expenses'));
    }

    public function store(Request $request)
    {
        $expense = new Expense;
        $expense->category = $request->input('category');
        $expense->mount = $request->input('mount');
        $expense->description = $request->input('description');
        $expense->purchase_date = $request->input('purchase_date');
        $expense->save();
    }
}
