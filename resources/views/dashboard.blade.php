<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="text-gray-500 text-sm">Users</div>
                    <div class="text-3xl font-bold">{{ \App\Models\User::count() }}</div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="text-gray-500 text-sm">Products</div>
                    <div class="text-3xl font-bold">{{ \App\Models\Product::count() }}</div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="text-gray-500 text-sm">Categories</div>
                    <div class="text-3xl font-bold">{{ \App\Models\Category::count() }}</div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="text-gray-500 text-sm">Orders</div>
                    <div class="text-3xl font-bold">{{ \App\Models\Order::count() }}</div>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-lg font-bold mb-4">Quick Actions</h3>
                    <div class="flex space-x-4">
                        <a href="{{ route('products.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Manage Products</a>
                        <a href="{{ route('categories.index') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Manage Categories</a>
                        <a href="{{ route('orders.index') }}" class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded">View Orders</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
