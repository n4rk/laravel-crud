{{-- Parent page containing navbar and footer --}}
<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
</head>
<body>
    <div id="app" class="container min-h-screen mx-auto px-4 shadow-xl">
        @include('layouts.navbar')
        <main class="py-4">
            @yield('content')
        </main>
        @include('layouts.footer')
    </div>
</body>
</html>
