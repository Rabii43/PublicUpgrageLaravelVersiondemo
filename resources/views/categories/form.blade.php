@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-4">{{ isset($category) ? 'Edit' : 'Create' }} Category</h1>

    <form action="{{ isset($category) ? route('categories.update', $category) : route('categories.store') }}" method="POST">
        @csrf
        @if(isset($category))
            @method('PUT')
        @endif

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Name</label>
            <input type="text" name="name" value="{{ old('name', $category->name ?? '') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700">
            @error('name')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Description</label>
            <textarea name="description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700">{{ old('description', $category->description ?? '') }}</textarea>
        </div>

        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Save</button>
    </form>
</div>
@endsection