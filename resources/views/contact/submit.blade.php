@extends('layouts.admin')

@section('content')
    <div class="container mx-auto my-20">
        <div class="flex justify-center">
            <div class="w-1/2">
                <div class="bg-white shadow-2xl rounded-lg p-12">
                    <div class="text-4xl font-bold mb-4">Contact Form</div>

                    <div class="text-lg mb-4">
                        <h3 class="text-2xl font-bold text-indigo-600 my-8">Thank you!</h3>
                        <p>Your message has been sent successfully.</p>
                        <p>We will get back to you soon.</p>
                    </div>

                    <div class="flex justify-start mt-8">
                        <a href="/" class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">
                            Back to Home
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
