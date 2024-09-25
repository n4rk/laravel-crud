@extends('layouts.admin')

@section('content')

    <div class="container mx-auto p-6">
        <!-- Title Section -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-gray-800">About</h1>
        </div>

        <!-- Description Section -->
        <div class="mb-8">
            <h2 class="text-2xl font-semibold mb-4 text-gray-700">Our App</h2>
            <p class="text-lg leading-relaxed text-gray-600">
                Our app is designed to help users manage their products efficiently. With a user-friendly interface and powerful features, you can easily add, edit, and delete products, track inventory, and much more.
            </p>
        </div>

        <!-- Founders Section -->
        <div class="mb-8">
            <h2 class="text-2xl font-semibold mb-4 text-gray-700">Founders</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-white p-6 rounded-lg shadow-md flex items-center">
                <img src="https://placeholder.co/200x200" alt="Founder 1" class="w-16 h-16 rounded-full mr-4">
                <div>
                <h3 class="text-xl font-bold mb-2 text-gray-800">Founder 1</h3>
                <p class="text-lg leading-relaxed text-gray-600">
                    Founder 1 is an experienced entrepreneur with a background in software development and product management.
                </p>
                </div>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md flex items-center">
                <img src="https://placeholder.co/200x200" alt="Founder 2" class="w-16 h-16 rounded-full mr-4">
                <div>
                <h3 class="text-xl font-bold mb-2 text-gray-800">Founder 2</h3>
                <p class="text-lg leading-relaxed text-gray-600">
                    Founder 2 has a strong background in marketing and business development, bringing a wealth of knowledge to the team.
                </p>
                </div>
            </div>
            </div>
        </div>

        <!-- Testimonials Section -->
        <div class="mb-8">
            <h2 class="text-2xl font-semibold mb-4 text-gray-700">Testimonials</h2>
            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <p class="text-lg leading-relaxed text-gray-600">
                        "This app has transformed the way we manage our products. It's intuitive and packed with features that make our workflow so much easier."
                    </p>
                    <p class="mt-4 text-right font-semibold text-gray-800">- User 1</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <p class="text-lg leading-relaxed text-gray-600">
                        "I love how easy it is to keep track of inventory and make updates on the fly. Highly recommend this app to anyone in need of a robust product management solution."
                    </p>
                    <p class="mt-4 text-right font-semibold text-gray-800">- User 2</p>
                </div>
            </div>
        </div>
    </div>
@endsection
