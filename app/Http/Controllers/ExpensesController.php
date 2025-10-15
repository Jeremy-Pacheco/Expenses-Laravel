<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expense;

class ExpensesController extends Controller
{
    public function index()
    {
        $expenses = Expense::all();
        return view('expenses.index', compact('expenses'));
    }

    // Mostrar formulario vacío
    public function create()
    {
        $expense = new Expense(); // vacío
        $isEdit = false; // para saber si estamos editando
        return view('expenses.create', compact('expense', 'isEdit'));
    }

    // Guardar nuevo registro
    public function store(Request $request)
    {
        $validated = $request->validate([
            'category' => 'required|in:Food,Transport,Housing,Health,Education,Entertainment,Finance,Leisure,Others',
            'mount' => 'required|numeric|min:0',
            'description' => 'required|string|max:255',
            'purchase_date' => 'required|date',
        ]);

        Expense::create($validated);
        return redirect()->route('expenses.index')->with('success', 'Expense created successfully!');
    }

    // Mostrar formulario con datos existentes
    public function edit(Expense $expense)
    {
        $isEdit = true;
        return view('expenses.create', compact('expense', 'isEdit'));
    }

    // Actualizar registro
    public function update(Request $request, Expense $expense)
    {
        $validated = $request->validate([
            'category' => 'required|in:Food,Transport,Housing,Health,Education,Entertainment,Finance,Leisure,Others',
            'mount' => 'required|numeric|min:0',
            'description' => 'required|string|max:255',
            'purchase_date' => 'required|date',
        ]);

        $expense->update($validated);
        return redirect()->route('expenses.index')->with('success', 'Expense updated successfully!');
    }

     /**
     * Eliminar un gasto
     */
    public function destroy(Expense $expense)
    {
        $expense->delete();

        return redirect()->route('expenses.index')
                         ->with('success', 'Expense deleted successfully!');
    }
}
