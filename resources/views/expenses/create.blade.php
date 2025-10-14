{{-- @extends('layout') --}}


<x-app-layout>
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
</x-app-layout>


{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nexora') }}
        </h2>
    </x-slot>

    
</x-app-layout> --}}

{{-- @section('content')
    <h1>Create a new Expense</h1>
    º
    @csrf
    <div class="form-group">
        <label for="category">Category</label>
        <input type="text" name="category" class="form-control" id="category" placeholder="Enter expense category">
    </div>
    <div class="form-group">
        <label for="mount">Mount</label>
        <input type="text" name="mount" class="form-control" id="mount" placeholder="Enter expense mount">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <input type="text" name="description" class="form-control" id="description"
            placeholder="Enter expense description">
    </div>
    <div class="form-group">
        <label for="purchase_date">Purchase Date</label>
        <input type="text" name="purchase_date" class="form-control" id="purchase_date"
            placeholder="Enter expense purchase_date">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <a href="{{ route('expenses.index') }}">Back to the list</a>
@endsection --}}
