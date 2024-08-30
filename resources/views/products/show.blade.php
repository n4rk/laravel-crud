@extends('layouts.admin')

@section('content')
<div class="container px-8">
    <h1 class="text-4xl font-bold my-8">Product :</h1>
    <form action="{{ route('products.show', $product->id) }}" class="flex flex-col space-y-6 px-20">
        <div class="w-full flex flex-col space-y-4">
            @method('GET')
            <div class="w-full flex space-x-4">
                <div class="w-full flex flex-col">
                    <label for="productName" class="text-zinc-700">Name</label>
                    <input id="productName" type="text" name="name" value="{{ $product->name }}" disabled class="py-2 px-4 rounded-lg border">
                </div>
                <div class="w-full flex flex-col">
                    <label for="description" class="text-zinc-700">Description</label>
                    <input id="description" type="text" name="description" value="{{ $product->description }}" disabled class="py-2 px-4 rounded-lg border">
                </div>
            </div>
            <div class="w-full flex space-x-4">
                <div class="w-full flex flex-col">
                    <label for="price" class="text-zinc-700">Price</label>
                    <input id="price" type="number" name="price" value="{{ $product->price }}" disabled class="py-2 px-4 rounded-lg border">
                </div>
                <div class="w-full flex flex-col">
                    <label for="quantity" class="text-zinc-700">Quantity</label>
                    <input id="quantity" type="number" name="quantity" value="{{ $product->quantity }}" disabled class="py-2 px-4 rounded-lg border">
                </div>
            </div>
            <div class="w-full flex flex-col">
                <label for="image" class="text-zinc-700">Image</label>
                <img class="rounded-xl my-4" src={{ $product->image }} alt="Product Image" width="200" />
            </div>
        </div>
    </form>
</div>
@endsection
