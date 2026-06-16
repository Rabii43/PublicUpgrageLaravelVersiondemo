@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Orders</h1>
    </div>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white shadow-md rounded my-6">
        <table class="min-w-full table-auto">
            <thead>
                <tr class="bg-gray-200">
                    <th class="px-4 py-2">ID</th>
                    <th class="px-4 py-2">User</th>
                    <th class="px-4 py-2">Total</th>
                    <th class="px-4 py-2">Status</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                <tr>
                    <td class="border px-4 py-2">{{ $order->id }}</td>
                    <td class="border px-4 py-2">{{ $order->user->name }}</td>
                    <td class="border px-4 py-2">{{ $order->total }} €</td>
                    <td class="border px-4 py-2">{{ $order->status }}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('orders.show', $order) }}" class="text-blue-500">View</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $orders->links() }}
</div>
@endsection