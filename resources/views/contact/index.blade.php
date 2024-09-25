@extends('layouts.admin')

@section('content')
    {{-- Contact page --}}
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-4">Contact Us</h1>
        <p class="mb-4">If you have any questions or inquiries, please feel free to contact us using the form below.</p>

        <form action="{{ route('contact.submit') }}" method="POST" class="max-w-lg mx-auto">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                <input type="text" name="name" id="name" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-indigo-500" required>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                <input type="email" name="email" id="email" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-indigo-500" required>
            </div>

            <div class="mb-4">
                <label for="message" class="block text-gray-700 text-sm font-bold mb-2">Message</label>
                <textarea name="message" id="message" rows="5" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-indigo-500" required></textarea>
            </div>

            <div class="mb-4">
                <button type="submit" class="bg-indigo-500 text-white px-4 py-2 rounded hover:bg-indigo-600">Submit</button>
            </div>
        </form>
    </div>
@endsection
