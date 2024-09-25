@extends('layouts.admin')
@section('content')
    <section class="w-full mx-auto py-12">
        <div class="container mx-auto grid gap-6 md:gap-8 px-4 md:px-6">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 md:gap-8">
                <div class="grid gap-1">
                    <h1 class="text-2xl font-bold tracking-tight">Innovative Products</h1>
                    <p class="text-muted-foreground">Discover the latest products in the market.</p>
                </div>
                <div class="justify-items-center space-x-2">
                    <a class="ml-auto shrink-0" href="{{ route('products.create')}}" rel="create">
                        <button class="inline-flex items-center justify-center whitespace-nowrap text-sm font-semibold bg-purple-600 text-white hover:bg-purple-700 duration-150 ease-in-out h-10 rounded-md px-6">
                            Create new product
                        </button>
                    </a>
                    <a class="ml-auto shrink-0" href="{{ route('products.index')}}" rel="list">
                        <button class="inline-flex items-center justify-center whitespace-nowrap text-sm font-semibold bg-slate-100 text-slate-900 border border-slate-300 hover:bg-slate-200 duration-150 ease-in-out h-10 rounded-md px-6">
                            List of products
                        </button>
                    </a>
                </div>
            </div>
            <ul class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            @foreach ($products as $product)
            <li class="grid gap-4 border rounded-lg overflow-hidden">
                @if ($product->image)
                <img
                    src="{{ asset('storage/' . $product->image) }}"
                    alt="Product Image"
                    width="400"
                    height="400"
                    class="w-full aspect-square object-cover"
                />
                @endif
                <div class="p-4 grid gap-2">
                <div class="flex items-center justify-between">
                    <h3 class="font-semibold">{{ $product->name }}</h3>
                    <div class="text-xl font-extrabold">{{ $product->price }}$</div>
                </div>
                <p class="text-slate-600 text-justify">{{ $product->description }}</p>
                <div class="flex items-center justify-between mt-4">
                    <div
                    class="inline-flex w-fit items-center whitespace-nowrap rounded-full border px-2.5 py-0.5 text-xs font-medium"
                    data-v0-t="badge"
                    >
                    {{ $product->quantity }} in stock
                    </div>
                    <a>
                    <a href="{{ route('products.show', $product->id) }}" class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium bg-slate-800 text-white h-8 px-4">
                        View Product
                    </a>
                    </a>
                </div>
                </div>
            </li>
            @endforeach
            </ul>
        </div>
        <div class="flex items-center justify-center mx-auto mt-8 text-sm font-bold underline">
            <a href="/products">View More Products</a>
        </div>
    </section>
@endsection
