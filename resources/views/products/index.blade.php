@extends('layouts.admin')

@section('content')
    <div class="container px-8">
        <div class="w-full flex justify-between items-center mb-5">
            <h1 class="text-2xl font-bold mb-6">List of Products</h1>
            <div class="flex justify-end items-center space-x-4">
                <!-- Add search form to display product by keyword -->
                <form action="{{ route('products.search') }}" method="GET" class="flex justify-end">
                    <input type="text" name="keyword" id="keyword" class="px-3 py-2 border border-gray-300 rounded-md" placeholder="Search...">
                    <button type="submit" class=" text-purple-500 border-2 border-purple-500 font-semibold py-2 px-4 mx-2 rounded-lg ease-in-out duration-75 hover:bg-purple-500/10 hover:text-purple-700">Search</button>
                </form>
                <a href="{{ route('products.create')}}" class="text-center text-white border-2 border-purple-500 bg-purple-500 font-semibold py-2 px-4 rounded-lg ease-in-out duration-75 hover:bg-purple-600">Create a new Product</a>
            </div>
        </div>
        <table class="w-full table-auto border-collapse border border-slate-200/50">
            <thead>
                <tr class="bg-zinc-100 w-full flex justify-between items-center">
                    <th class="p-4 w-1/12 flex justify-center">ID</th>
                    <th class="p-4 w-3/12 flex justify-center">Image</th>
                    <th class="p-4 w-2/12 flex justify-center">Name</th>
                    <th class="p-4 w-3/12 flex justify-center">Description</th>
                    <th class="p-4 w-1/12 flex justify-center">Price</th>
                    <th class="p-4 w-2/12 flex justify-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @if($products->isEmpty())
                    <tr>
                        <td class="p-4 w-full flex justify-center" colspan="6">No products found.</td>
                    </tr>
                @else
                @foreach ($products as $product)
                    <tr class="border-b w-full flex justify-between items-center">
                        <td class="p-2 w-1/12 flex justify-center">{{ $product->id }}</td>
                        <td class="p-2 w-3/12 flex justify-center">
                            @if ($product->image)
                                <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" class="mt-2 w-32 h-32 object-cover rounded-xl">
                            @endif
                        </td>
                        <td class="p-2 w-2/12 flex justify-center">{{ $product->name }}</td>
                        <td class="p-2 w-3/12 flex justify-left">{{ $product->description }}</td>
                        <td class="p-2 w-1/12 flex justify-center">{{ $product->price }} MAD</td>
                        <td class="p-2 w-2/12 flex justify-center space-x-2">
                            <a href="{{ route('products.show', $product->id) }}" class="text-white bg-blue-600 p-2 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4">
                                    <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                    <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 0 1 0-1.113ZM17.25 12a5.25 5.25 0 1 1-10.5 0 5.25 5.25 0 0 1 10.5 0Z" clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="{{ route('products.edit', $product->id) }}" class="text-white bg-emerald-600 p-2 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4">
                                    <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                                    <path d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
                                </svg>
                            </a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-white bg-red-500 p-2 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4">
                                        <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                <!-- Pagination links -->
                {{-- {{ $products->links() }} --}}
                {{ $products->appends(['keyword' => $keyword])->links() }}
                @endif
            </tbody>
        </table>
    </div>
@endsection
