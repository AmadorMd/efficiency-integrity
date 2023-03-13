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
    
    <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">
    
</head>
<body>
    <div class="w-screen h-screen flex flex-col justify-between items-center">
        <header class="w-full z-50">
            @livewire('frontend.nav')
        </header>
        <main class="w-full mt-28">
            @yield('content')
        </main>
        <footer class="w-full mt-10">
            <div class="bg-primary flex flex-row w-full py-6 px-6 items-center flex-wrap">
                <div class="w-1/2">
                    <ul class="text-white text-sm flex flex-col justify-center items-start h-full w-full px-2 gap-1">
                        <li>
                            <a href="{{ route('home') }}" class="hover:underline hover:underline-offset-4 {{ request()->routeIs('home')?'font-bold':'' }}">
                                INICIO
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}" class="hover:underline hover:underline-offset-4">
                                ACERCA DE NOSOTROS
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('blogs') }}" class="hover:underline hover:underline-offset-4">
                                BLOG
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('sevices') }}" class="hover:underline hover:underline-offset-4">
                                SERVICIOS
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline hover:underline-offset-4">
                                PROGRAMAS DE CAPACITACIÓN
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline hover:underline-offset-4">
                                CONTACTO
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="w-1/2">
                    <img class="w-44 m-auto" src="{{ asset('images/logo.svg') }}" alt="">
                </div>
                <div class="w-full mt-5">
                    <ul class="flex flex-row justify-center items-center gap-3">
                        <li>
                            <a href="#">
                                <svg class="text-white w-5 h-5 hover:underline"  stroke="currentColor" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                                    viewBox="0 0 310 310" xml:space="preserve">
                                    <g id="XMLID_834_">
                                        <path id="XMLID_835_" d="M81.703,165.106h33.981V305c0,2.762,2.238,5,5,5h57.616c2.762,0,5-2.238,5-5V165.765h39.064
                                            c2.54,0,4.677-1.906,4.967-4.429l5.933-51.502c0.163-1.417-0.286-2.836-1.234-3.899c-0.949-1.064-2.307-1.673-3.732-1.673h-44.996
                                            V71.978c0-9.732,5.24-14.667,15.576-14.667c1.473,0,29.42,0,29.42,0c2.762,0,5-2.239,5-5V5.037c0-2.762-2.238-5-5-5h-40.545
                                            C187.467,0.023,186.832,0,185.896,0c-7.035,0-31.488,1.381-50.804,19.151c-21.402,19.692-18.427,43.27-17.716,47.358v37.752H81.703
                                            c-2.762,0-5,2.238-5,5v50.844C76.703,162.867,78.941,165.106,81.703,165.106z"/>
                                    </g>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <svg class="text-white w-7 h-7" fill="currentColor" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><path d="M20.445 5h-8.891A6.559 6.559 0 0 0 5 11.554v8.891A6.559 6.559 0 0 0 11.554 27h8.891a6.56 6.56 0 0 0 6.554-6.555v-8.891A6.557 6.557 0 0 0 20.445 5zm4.342 15.445a4.343 4.343 0 0 1-4.342 4.342h-8.891a4.341 4.341 0 0 1-4.341-4.342v-8.891a4.34 4.34 0 0 1 4.341-4.341h8.891a4.342 4.342 0 0 1 4.341 4.341l.001 8.891z"/><path d="M16 10.312c-3.138 0-5.688 2.551-5.688 5.688s2.551 5.688 5.688 5.688 5.688-2.551 5.688-5.688-2.55-5.688-5.688-5.688zm0 9.163a3.475 3.475 0 1 1-.001-6.95 3.475 3.475 0 0 1 .001 6.95zM21.7 8.991a1.363 1.363 0 1 1-1.364 1.364c0-.752.51-1.364 1.364-1.364z"/></svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <svg class="text-white w-5 h-5" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 310 310" xml:space="preserve">
                                <g id="XMLID_826_">
                                    <path id="XMLID_827_" d="M302.973,57.388c-4.87,2.16-9.877,3.983-14.993,5.463c6.057-6.85,10.675-14.91,13.494-23.73
                                        c0.632-1.977-0.023-4.141-1.648-5.434c-1.623-1.294-3.878-1.449-5.665-0.39c-10.865,6.444-22.587,11.075-34.878,13.783
                                        c-12.381-12.098-29.197-18.983-46.581-18.983c-36.695,0-66.549,29.853-66.549,66.547c0,2.89,0.183,5.764,0.545,8.598
                                        C101.163,99.244,58.83,76.863,29.76,41.204c-1.036-1.271-2.632-1.956-4.266-1.825c-1.635,0.128-3.104,1.05-3.93,2.467
                                        c-5.896,10.117-9.013,21.688-9.013,33.461c0,16.035,5.725,31.249,15.838,43.137c-3.075-1.065-6.059-2.396-8.907-3.977
                                        c-1.529-0.851-3.395-0.838-4.914,0.033c-1.52,0.871-2.473,2.473-2.513,4.224c-0.007,0.295-0.007,0.59-0.007,0.889
                                        c0,23.935,12.882,45.484,32.577,57.229c-1.692-0.169-3.383-0.414-5.063-0.735c-1.732-0.331-3.513,0.276-4.681,1.597
                                        c-1.17,1.32-1.557,3.16-1.018,4.84c7.29,22.76,26.059,39.501,48.749,44.605c-18.819,11.787-40.34,17.961-62.932,17.961
                                        c-4.714,0-9.455-0.277-14.095-0.826c-2.305-0.274-4.509,1.087-5.294,3.279c-0.785,2.193,0.047,4.638,2.008,5.895
                                        c29.023,18.609,62.582,28.445,97.047,28.445c67.754,0,110.139-31.95,133.764-58.753c29.46-33.421,46.356-77.658,46.356-121.367
                                        c0-1.826-0.028-3.67-0.084-5.508c11.623-8.757,21.63-19.355,29.773-31.536c1.237-1.85,1.103-4.295-0.33-5.998
                                        C307.394,57.037,305.009,56.486,302.973,57.388z"/>
                                </g>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <svg class="text-white w-5 h-5" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-271 283.9 256 235.1" xml:space="preserve">
                                    <g>
                                        <rect x="-264.4" y="359.3" width="49.9" height="159.7"/>
                                        <path d="M-240.5,283.9c-18.4,0-30.5,11.9-30.5,27.7c0,15.5,11.7,27.7,29.8,27.7h0.4c18.8,0,30.5-12.3,30.4-27.7
                                            C-210.8,295.8-222.1,283.9-240.5,283.9z"/>
                                        <path d="M-78.2,357.8c-28.6,0-46.5,15.6-49.8,26.6v-25.1h-56.1c0.7,13.3,0,159.7,0,159.7h56.1v-86.3c0-4.9-0.2-9.7,1.2-13.1
                                            c3.8-9.6,12.1-19.6,27-19.6c19.5,0,28.3,14.8,28.3,36.4V519h56.6v-88.8C-14.9,380.8-42.7,357.8-78.2,357.8z"/>
                                    </g>
                                </svg>
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </div>
            <div class="bg-[#212840] px-6 py-3 text-center">
                <p class="text-white text-sm">Efficiency & Integrity Standard ® {{ now()->year }}</p>
            </div>
        </footer>
    </div>
    
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider-extensions.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
</body>
</html>