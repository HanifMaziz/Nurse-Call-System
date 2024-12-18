<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body class="flex flex-col min-h-screen bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-white text-gray-900 py-4">
        <div class="container mx-auto">
            <ul class="flex justify-center space-x-8 text-lg font-semibold">
                <li class="flex flex-col items-center">
                    <x-svg-icon path="home.svg" class="w-6 h-6 text-red-500" />
                    <a href="/" class="hover:underline">Home</a>
                </li>
                <li class="flex flex-col items-center">
                    <x-svg-icon path="alert.svg" class="w-6 h-6 text-red-500" />
                    <a href="/alert" class="hover:underline">Alert</a>
                </li>
                <li class="flex flex-col items-center">
                    <x-svg-icon path="event.svg" class="w-6 h-6 text-red-500" />
                    <a href="/event" class="hover:underline">Event Log</a>
                </li>
                <li class="flex flex-col items-center">
                    <x-svg-icon path="setting.svg" class="w-6 h-6 text-red-500" />
                    <a href="/setting" class="hover:underline">Settings</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow container mx-auto py-8">
      @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-[#C4C4C5] text-black py-4">
        <div class="container mx-auto flex justify-between">
            <div class="grid grid-flow-col auto-cols-auto justify-between gap-x-8">
                <a href="#" class="block hover:underline">Contact Us</a>
                <a href="#" class="block hover:underline">Privacy and Security</a>
                <a href="#" class="block hover:underline">Terms of Use</a>
            </div>

            <div class="text-right">
                <p>@NurseStation2024</p>
            </div>
        </div>
    </footer>

</body>
</html>
