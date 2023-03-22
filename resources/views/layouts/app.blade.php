<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="stylesheet" href="https://use.typekit.net/bhp3wtc.css">
    @vite('resources/css/app.css')
    @livewireStyles
     {{-- Text Rich Editor Assets --}}
     <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
     <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
</head>
<body class="bg-primary">
    <div class="flex flex-col justify-start">
        <header class="w-full h-24 flex items-center justify-between px-6">
            <img class="w-32" src="{{ asset('images/logo.svg') }}" alt="">
            <div>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-outline inline-flex items-center">
                        <span class="mr-2">Cerrar Sesión</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                        </svg>
                    </button>
                </form>
            </div>
        </header>
        <div class="flex justify-between flew-row h-[90%]">
            @include('admin.partials._aside-menu')
            <main class="w-2/3 pr-6 pb-6">
                <div class="bg-white rounded-md h-full p-3">
                    @if (session('success'))
                    <div class=" bg-gradient-to-r from-emerald-500 to-emerald-300 px-5 py-2 inline-flex text-white w-full justify-between items-center rounded-full">  
                        <span>{{ session('success') }}</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                          </svg>
                    </div>
                    @endif
                    @yield('content')
                </div>
            </main>
        </div>
    </div>
    
    
    @livewireScripts
</body>
</html>
