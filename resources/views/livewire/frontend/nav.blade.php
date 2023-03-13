<nav class="fixed">
    <div class="w-full bg-secondary py-2 px-3">
        <p class="text-center text-white text-xs">FACILITAMOS, DISEÑAMOS E IMPLEMENTAMOS SISTEMAS DE GESTIÓN DE INTEGRIDAD</p>
    </div>
    <div class="flex flex-row items-start w-full">
        <div class="bg-black bg-opacity-100 px-6 py-3 flex flex-row items-center justify-between {{ $menuOpen?'w-1/2':'w-full' }} transform transition-all duration-500 ease-in-out">
            <div>
                <a href="{{ route('home') }}">
                    <img class="w-36" src="{{ asset('images/logo.svg') }}" alt="Efficiency & Integrity">
                </a>
            </div>
            <div>
                <button wire:click="handleMenuOpen" class="bg-primary p-1 rounded-md hover:bg-sky-800 focus:ring-2 focus:ring-sky-500 block lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-white w-6 h-6" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M4 6l16 0"></path>
                        <path d="M4 12l16 0"></path>
                        <path d="M4 18l16 0"></path>
                     </svg>
                </button>
            </div>
        </div>
        
        <div class="w-1/2 bg-black h-screen transform transition-transform duration-500 ease-in-out delay-100 {{ $menuOpen?'block translate-x-0':'translate-x-80 hidden' }}">
            <ul class="text-white text-sm flex flex-col justify-center items-start h-full w-full px-8 gap-2">
                <li>
                    <a href="{{ route('home') }}">
                        INICIO
                    </a>
                </li>
                <li>
                    <a href="{{ route('about') }}">
                        ACERCA DE NOSOTROS
                    </a>
                </li>
                <li>
                    <a href="{{ route('blogs') }}">
                        BLOG
                    </a>
                </li>
                <li>
                    <a href="{{ route('services') }}">
                        SERVICIOS
                    </a>
                </li>
                <li>
                    <a href="{{ route('programs') }}">
                        PROGRAMAS DE CAPACITACIÓN
                    </a>
                </li>
                <li>
                    <a href="#">
                        CONTACTO
                    </a>
                </li>
            </ul>
        </div>
    </div>
    
</nav>
