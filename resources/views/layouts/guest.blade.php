<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Efficiency & Integretity</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body>
    <div class="w-screen h-screen flex flex-col justify-between items-center">
        <header class="w-full">
            <div class="w-full bg-secondary py-2 px-3">
                <p class="text-center text-white text-xs">FACILITAMOS, DISEÑAMOS E IMPLEMENTAMOS SISTEMAS DE GESTIÓN DE INTEGRIDAD</p>
            </div>
            @livewire('frontend.nav')
        </header>
        <main></main>
        <footer>
            @yield('content')
        </footer>
    </div>
    
    @livewireScripts
</body>
</html>