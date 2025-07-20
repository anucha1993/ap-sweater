<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AP Sweater</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-white text-black">
    <div class="bg-white">
        @include('components.navbar')
    </div>
    <main class="container mx-auto px-4 py-6">
        @yield('content')
    </main>
    @livewireScripts
</body>
</html>
