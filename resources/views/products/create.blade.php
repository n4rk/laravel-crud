@extends('layouts.admin') <!-- Assuming you're using a layout file -->

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-6">Create a new Product</h1>

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="w-full flex space-x-8">
            <div class="w-full mb-4">
                <label for="productName" class="block text-gray-700 font-semibold mb-2">Product Name</label>
                <input type="text" name="name" id="productName" class="w-full px-3 py-2 border border-gray-300 rounded-md" placeholder="Enter the product's name" required>
            </div>
            <div class="w-full mb-4">
                <label for="price" class="block text-gray-700 font-semibold mb-2">Price</label>
                <input type="number" name="price" id="price" class="w-full px-3 py-2 border border-gray-300 rounded-md" placeholder="Enter the price in $" step="1" required>
            </div>
        </div>
        <div class="w-full flex space-x-8">
            <div class="w-full mb-4">
                <label for="quantity" class="block text-gray-700 font-semibold mb-2">Quantity</label>
                <input type="number" name="quantity" id="quantity" class="w-full px-3 py-2 border border-gray-300 rounded-md" placeholder="Enter the quantity" required>
            </div>
            <div class="w-full mb-4">
                <label for="description" class="block text-gray-700 font-semibold mb-2">Description</label>
                <textarea rows="3" name="description" id="description" class="w-full px-3 py-2 border border-gray-300 rounded-md" placeholder="Enter the product's description" required></textarea>
            </div>
        </div>

        <div class="w-full mb-8">
            <label for="image" class="block text-gray-700 font-semibold mb-2">Product Image</label>
            <input type="file" name="image" id="image" class="w-full px-3 py-2 border border-gray-300 rounded-md" required>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 font-semibold rounded-md hover:bg-blue-600">Create Product</button>
    </form>
</div>
@endsection
