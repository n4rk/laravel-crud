@extends('layouts.admin')

@section('content')
<div class="container px-8">
    <h1 class="text-4xl font-bold my-8">Edit Product :</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST" class="flex flex-col space-y-6 px-20" enctype="multipart/form-data">
        <div class="w-full flex flex-col space-y-4">
            @csrf
            @method('PUT')
            <div class="w-full flex space-x-4">
                <div class="w-full flex flex-col">
                    <label for="productName" class="text-zinc-700">Name</label>
                    <input id="productName" type="text" name="name" value="{{ $product->name }}" required class="py-2 px-4 rounded-lg border">
                </div>
                <div class="w-full flex flex-col">
                    <label for="description" class="text-zinc-700">Description</label>
                    <input id="description" type="text" name="description" value="{{ $product->description }}" required class="py-2 px-4 rounded-lg border">
                </div>
            </div>
            <div class="w-full flex space-x-4">
                <div class="w-full flex flex-col">
                    <label for="price" class="text-zinc-700">Price</label>
                    <input id="price" type="number" name="price" value="{{ $product->price }}" required class="py-2 px-4 rounded-lg border">
                </div>
                <div class="w-full flex flex-col">
                    <label for="quantity" class="text-zinc-700">Quantity</label>
                    <input id="quantity" type="number" name="quantity" value="{{ $product->quantity }}" required class="py-2 px-4 rounded-lg border">
                </div>
            </div>
            <div class="w-full flex flex-col">
                <label for="image" class="text-zinc-700">Image</label>
                <input id="image" type="file" name="image" class="py-2 px-4 rounded-lg border">
                @if ($product->image)
                    <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" class="mt-2 w-64 h-64 object-cover rounded-2xl">
                @endif
            </div>
            <button type="submit" class="w-1/3 flex font-bold text-white bg-emerald-600 justify-center items-center space-x-2 mt-2 p-4 border rounded-full text-lg">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4">
                    <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                    <path d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
                </svg> <span>Update</span>
            </button>
        </div>
    </form>
</div>
@endsection
