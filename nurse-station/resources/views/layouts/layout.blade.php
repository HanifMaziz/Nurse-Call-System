<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    @vite('resources/css/app.css')
</head>
<body class="flex flex-col min-h-screen bg-gray-100">
    <!-- Navbar -->
    <nav class="bg-white text-gray-900 py-4">
        <div class="container mx-auto">
            <ul class="flex flex-wrap justify-center space-x-8 text-lg font-semibold">
                <li class="flex flex-col items-center mb-4 sm:mb-0">
                    <x-svg-icon path="home.svg" class="w-6 h-6 {{ request()->is('/') ? 'text-blue-500' : 'text-red-500' }}" />
                    <a href="/" class="{{ request()->is('/') ? 'text-black font-bold underline decoration-blue-500 decoration-2 underline-offset-8' : 'hover:underline' }}">Home</a>
                </li>
                <li class="flex flex-col items-center mb-4 sm:mb-0">
                    <x-svg-icon path="alert.svg" class="w-6 h-6 {{ request()->is('alert') ? 'text-blue-500' : 'text-red-500' }}" />
                    <a href="/alert" class="{{ request()->is('alert') ? 'text-black font-bold underline decoration-blue-500 decoration-2 underline-offset-8' : 'hover:underline' }}">Alert</a>
                </li>
                <li class="flex flex-col items-center mb-4 sm:mb-0">
                    <x-svg-icon path="event.svg" class="w-6 h-6 {{ request()->is('event') ? 'text-blue-500' : 'text-red-500' }}" />
                    <a href="/event" class="{{ request()->is('event') ? 'text-black font-bold underline decoration-blue-500 decoration-2 underline-offset-8' : 'hover:underline' }}">Event Log</a>
                </li>
                <li class="flex flex-col items-center mb-4 sm:mb-0">
                    <x-svg-icon path="setting.svg" class="w-6 h-6 {{ request()->is('setting') ? 'text-blue-500' : 'text-red-500' }}" />
                    <a href="/setting" class="{{ request()->is('setting') ? 'text-black font-bold underline decoration-blue-500 decoration-2 underline-offset-8' : 'hover:underline' }}">Settings</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow container mx-auto py-8 flex flex-col">
      @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-[#C4C4C5] text-black py-4">
        <div class="container mx-auto flex flex-col sm:flex-row justify-between items-center">
            <div class="grid grid-flow-col auto-cols-auto justify-between gap-x-8 mb-4 sm:mb-0">
                <a href="#" class="block hover:underline">Contact Us</a>
                <a href="#" class="block hover:underline">Privacy and Security</a>
                <a href="#" class="block hover:underline">Terms of Use</a>
            </div>

            <div class="text-center sm:text-right">
                <p>@NurseStation2024</p>
            </div>
        </div>
    </footer>

</body>
</html>
