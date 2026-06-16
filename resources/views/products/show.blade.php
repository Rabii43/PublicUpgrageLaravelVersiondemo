@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-4">Product Details</h1>

    <div class="bg-white shadow-md rounded px-6 py-4">
        <p><strong>Name:</strong> {{ $product->name }}</p>
        <p><strong>Description:</strong> {{ $product->description }}</p>
        <p><strong>Price:</strong> {{ $product->price }} €</p>
        <p><strong>Category:</strong> {{ $product->category->name }}</p>
        <a href="{{ route('products.index') }}" class="mt-4 inline-block bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Back</a>
    </div>
</div>
@endsection