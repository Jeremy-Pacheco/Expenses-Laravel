<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expense;

class ExpensesController extends Controller
{
    // Mostrar solo los gastos del usuario autenticado
    public function index()
    {
        $expenses = Expense::where('user_id', auth()->id())->get();
        return view('expenses.index', compact('expenses'));
    }

    // Mostrar formulario vacío
    public function create()
    {
        $expense = new Expense();
        $isEdit = false;
        return view('expenses.create', compact('expense', 'isEdit'));
    }

    // Guardar nuevo registro asociado al usuario autenticado
    public function store(Request $request)
    {
        $validated = $request->validate([
            'category' => 'required|in:Food,Transport,Housing,Health,Education,Entertainment,Finance,Leisure,Others',
            'mount' => 'required|numeric|min:0',
            'description' => 'required|string|max:255',
            'purchase_date' => 'required|date',
        ]);

        Expense::create([
            'user_id' => auth()->id(),
            'category' => $validated['category'],
            'mount' => $validated['mount'],
            'description' => $validated['description'],
            'purchase_date' => $validated['purchase_date'],
        ]);

        return redirect()->route('expenses.index')->with('success', 'Expense created successfully!');
    }

    // Mostrar formulario con datos existentes solo si pertenece al usuario
    public function edit(Expense $expense)
    {
        $this->authorizeExpense($expense);

        $isEdit = true;
        return view('expenses.create', compact('expense', 'isEdit'));
    }

    // Actualizar registro solo si pertenece al usuario
    public function update(Request $request, Expense $expense)
    {
        $this->authorizeExpense($expense);

        $validated = $request->validate([
            'category' => 'required|in:Food,Transport,Housing,Health,Education,Entertainment,Finance,Leisure,Others',
            'mount' => 'required|numeric|min:0',
            'description' => 'required|string|max:255',
            'purchase_date' => 'required|date',
        ]);

        $expense->update($validated);

        return redirect()->route('expenses.index')->with('success', 'Expense updated successfully!');
    }

    // Eliminar un gasto solo si pertenece al usuario
    public function destroy(Expense $expense)
    {
        $this->authorizeExpense($expense);

        $expense->delete();

        return redirect()->route('expenses.index')->with('delete', 'Expense deleted successfully!');//!message deleted
    }

    // Función privada para validar propiedad del gasto
    private function authorizeExpense(Expense $expense)
    {
        if ($expense->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }
    }
}
