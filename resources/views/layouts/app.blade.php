<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Norien Technologies')</title>
    <meta name="description" content="@yield('description', 'Norien Technologies - IT services and products for SMBs.')">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('schema')
</head>
<body class="font-sans antialiased bg-white text-slate-900">
    <header class="border-b">
        <nav class="max-w-6xl mx-auto flex items-center justify-between px-4 py-4">
            <a href="{{ route('home') }}" class="text-xl font-bold">Norien Technologies</a>
            <div class="flex gap-6 text-sm">
                <a href="{{ route('services') }}">Services</a>
                <a href="{{ route('products') }}">Products</a>
                <a href="{{ route('contact') }}">Contact</a>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="border-t mt-16 py-8 text-sm text-slate-500">
        <div class="max-w-6xl mx-auto px-4">
            &copy; {{ date('Y') }} Norien Technologies (OPC) Private Limited. All rights reserved.
        </div>
    </footer>
</body>
</html>
