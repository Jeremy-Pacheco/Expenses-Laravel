<x-app-layout>
    <x-slot name="header">
        <h1 class="text-gray-900">Expenses List</h1>
    </x-slot>

    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-6 py-6">

                @if (session('success'))
                    <div class="mb-4 text-green-600 font-semibold">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="flex justify-end mb-4">
                    <a href="{{ route('expenses.create') }}"
                        class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                        + Add Expense
                    </a>
                </div>

                <table class="min-w-full border border-gray-300">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="border px-4 py-2 text-left">Category</th>
                            <th class="border px-4 py-2 text-left">Amount</th>
                            <th class="border px-4 py-2 text-left">Description</th>
                            <th class="border px-4 py-2 text-left">Purchase Date</th>
                            <th class="border px-4 py-2 text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($expenses as $expense)
                            <tr>
                                <td class="border px-4 py-2">{{ $expense->category }}</td>
                                <td class="border px-4 py-2">{{ number_format($expense->mount, 2) }}€</td>
                                <td class="border px-4 py-2">{{ $expense->description }}</td>
                                <td class="border px-4 py-2">{{ $expense->purchase_date }}</td>
                                <td class="border px-4 py-2">
                                    <div class="flex flex-col md:flex-row md:space-x-2 space-y-2 md:space-y-0">
                                        <a href="{{ route('expenses.edit', $expense->id) }}"
                                            class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 text-center">
                                            Edit
                                        </a>

                                        <form action="{{ route('expenses.destroy', $expense->id) }}" method="POST"
                                            class="w-full md:w-auto">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 w-full">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center py-4 text-gray-500">No expenses recorded yet.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>
