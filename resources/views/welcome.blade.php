<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-gray-100 text-gray-900">
    <div class="p-6 text-right">
        @if (Route::has('login'))
            <div class="space-x-4">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-white-700 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>
</body>
</html>
