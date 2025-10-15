@extends('layout')



<x-app-layout>
    <x-slot name="header">
        <h1 class="text-gray-900">
            {{ $isEdit ? 'Edit Expense' : 'Create Expense' }}
        </h1>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-6 py-6">

                @if ($errors->any())
                    <div class="mb-4 text-red-600">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>- {{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form 
                    action="{{ $isEdit ? route('expenses.update', $expense->id) : route('expenses.store') }}" 
                    method="POST">
                    @csrf
                    @if ($isEdit)
                        @method('PUT')
                    @endif

                    <div class="mb-4">
                        <label for="category" class="block font-semibold text-gray-700">Category</label>
                        <select name="category" id="category" class="border border-gray-300 rounded w-full p-2">
                            <option value="">-- Select Category --</option>
                            @foreach (['Food','Transport','Housing','Health','Education','Entertainment','Finance','Leisure','Others'] as $cat)
                                <option value="{{ $cat }}" 
                                    {{ old('category', $expense->category) == $cat ? 'selected' : '' }}>
                                    {{ $cat }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="mount" class="block font-semibold text-gray-700">Amount</label>
                        <input 
                            type="number" 
                            name="mount" 
                            id="mount" 
                            step="0.01" 
                            value="{{ old('mount', $expense->mount) }}" 
                            class="border border-gray-300 rounded w-full p-2" 
                            placeholder="Enter amount">
                    </div>

                    <div class="mb-4">
                        <label for="description" class="block font-semibold text-gray-700">Description</label>
                        <input 
                            type="text" 
                            name="description" 
                            id="description" 
                            value="{{ old('description', $expense->description) }}" 
                            class="border border-gray-300 rounded w-full p-2" 
                            placeholder="Enter description">
                    </div>

                    <div class="mb-4">
                        <label for="purchase_date" class="block font-semibold text-gray-700">Purchase Date</label>
                        <input 
                            type="date" 
                            name="purchase_date" 
                            id="purchase_date" 
                            value="{{ old('purchase_date', $expense->purchase_date) }}" 
                            class="border border-gray-300 rounded w-full p-2">
                    </div>

                    <div class="flex justify-end">
                        <a href="{{ route('expenses.index') }}" class="bg-red-500 text-white px-4 py-2 rounded mr-2 hover:bg-gray-600">Cancel</a>
                        <button type="submit" 
                                class="{{ $isEdit ? 'bg-blue-600 hover:bg-blue-700' : 'bg-green-600 hover:bg-green-700' }} text-white px-4 py-2 rounded">
                            {{ $isEdit ? 'Update' : 'Save' }}
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>










{{-- <x-app-layout>
    <x-slot name="header">
        <h1 class="text-gray-900">Create Expense</h1>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-6 py-6">

                @if ($errors->any())
                    <div class="mb-4 text-red-600">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>- {{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('expenses.store') }}" method="POST">
                    @csrf

                    <div class="mb-4">
                        <label for="category" class="block font-semibold text-gray-700">Category</label>
                        <select name="category" id="category" class="border border-gray-300 rounded w-full p-2">
                            <option value="">-- Select Category --</option>
                            <option value="Food">Food</option>
                            <option value="Transport">Transport</option>
                            <option value="Housing">Housing</option>
                            <option value="Health">Health</option>
                            <option value="Education">Education</option>
                            <option value="Entertainment">Entertainment</option>
                            <option value="Finance">Finance</option>
                            <option value="Leisure">Leisure</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="mount" class="block font-semibold text-gray-700">Amount</label>
                        <input type="number" name="mount" id="mount" step="0.01" class="border border-gray-300 rounded w-full p-2" placeholder="Enter amount">
                    </div>

                    <div class="mb-4">
                        <label for="description" class="block font-semibold text-gray-700">Description</label>
                        <input type="text" name="description" id="description" class="border border-gray-300 rounded w-full p-2" placeholder="Enter description">
                    </div>

                    <div class="mb-4">
                        <label for="purchase_date" class="block font-semibold text-gray-700">Purchase Date</label>
                        <input type="date" name="purchase_date" id="purchase_date" class="border border-gray-300 rounded w-full p-2">
                    </div>

                    
                    <div class="flex justify-end">
                        <a href="{{ route('expenses.index') }}" class="bg-red-500 text-white px-4 py-2 rounded mr-2 hover:bg-gray-600">Cancel</a>
                        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Save</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout> --}}








{{-- <x-app-layout>
    <x-slot name="header">
        <h1 class="text-gray-900">EXPENSES</h1>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">

                <button wire:click="add()"
                    class="bg-green-600 hover:bg-green-600 text-white font-bold py-2 px-4 my-3">Add</button>
                <table class="table-fixed w-full">
                    <thead>
                        <tr class="bg-indigo-600 text-white">
                            <th class="px-4 py-2">CATEGORY</th>
                            <th class="px-4 py-2">MOUNT</th>
                            <th class="px-4 py-2">DESCRIPTION</th>
                            <th class="px-4 py-2">PURCHASE DATE</th>
                            <th class="px-4 py-2">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($expenses as $expense)
                            <tr>
                                <td class="border px-4 py-2 text-black">{{ $expense->category }}</td>
                                <td class="border px-4 py-2 text-black">{{ $expense->mount }}</td>
                                <td class="border px-4 py-2 text-black">{{ $expense->description }}</td>
                                <td class="border px-4 py-2 text-black">{{ $expense->purchase_date }}</td>
                                <td class="border px-4 py-2 text-center">
                                    <button wire:click="edit({{ $expense->id }})" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4">Edit</button>
                                    <button wire:click="delete({{ $expense->id }})" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout> --}}

