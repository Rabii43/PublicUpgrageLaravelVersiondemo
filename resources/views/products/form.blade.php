@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-4">{{ isset($product) ? 'Edit' : 'Create' }} Product</h1>

    <form action="{{ isset($product) ? route('products.update', $product) : route('products.store') }}" method="POST">
        @csrf
        @if(isset($product))
            @method('PUT')
        @endif

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Name</label>
            <input type="text" name="name" value="{{ old('name', $product->name ?? '') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700">
            @error('name')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Description</label>
            <textarea name="description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700">{{ old('description', $product->description ?? '') }}</textarea>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Price</label>
            <input type="number" step="0.01" name="price" value="{{ old('price', $product->price ?? '') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700">
            @error('price')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Category</label>
            <select name="category_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ (isset($product) && $product->category_id == $category->id) ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category_id')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Save</button>
    </form>
</div>
@endsection