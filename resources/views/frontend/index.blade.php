@extends('layouts.guest')
@section('content')
<section>
    <div class="w-full">
        @include('frontend.partials._home-slider')
    </div>
</section>
<section class="mt-5 container mx-auto">
    <div class="w-full px-6 grid grid-cols-1 md:grid-cols-3 gap-y-6 md:gap-y-0 md:-mt-20 md:gap-5">
        <div class="w-full relative">
            <img class="w-full relative z-10" src="{{ asset('images/codigo-conducta.jpg') }}" alt="Codigo de conducta">
            <div class="absolute bottom-0 z-20 w-3/4 ml-7 mb-7">
                <p class="text-white font-bold text-lg md:text-xl leading-tight mb-1">
                    CÓDIGO DE CONDUCTA
                </p>
                <a href="#" class="text-white text-sm md:text-lg inline-flex items-center hover:font-bold">
                    <span class="mr-2">Ver Servicio</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                      </svg>
                      
                </a>
            </div>
        </div>
        <div class="w-full relative">
            <img class="w-full relative z-10" src="{{ asset('images/auditoria-integridad.jpg') }}" alt="Codigo de conducta">
            <div class="absolute bottom-0 z-20 w-3/4 ml-7 mb-7">
                <p class="text-white font-bold text-lg md:text-xl leading-tight mb-1">
                    AUDITORÍA DE INTEGRIDAD
                </p>
                <a href="#" class="text-white text-sm md:text-lg inline-flex items-center hover:font-bold">
                    <span class="mr-2">Ver Servicio</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                      </svg>
                      
                </a>
            </div>
        </div>
        <div class="w-full relative">
            <img class="w-full relative z-10" src="{{ asset('images/politicas-humanas.jpg') }}" alt="Codigo de conducta">
            <div class="absolute bottom-0 z-20 w-3/4 ml-7 mb-7">
                <p class="text-white font-bold text-lg md:text-xl leading-tight mb-1">
                    POLÍTICAS DE RECURSOS HUMANOS
                </p>
                <a href="#" class="text-white text-sm md:text-lg inline-flex items-center hover:font-bold">
                    <span class="mr-2">Ver Servicio</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                      </svg>
                      
                </a>
            </div>
        </div>
    </div>
    <div class="mt-5 text-center">
        <a href="{{ route('services') }}" class="btn btn-primary">
            VER SERVICIOS
        </a>
    </div>
</section>
<section class="mt-5 md:mt-16">
    <div class="bg-custom-gray py-10 px-6">
        <div class="container flex flex-col md:flex-row mx-auto gap-3 items-center">
            <div class="w-full px-3">
                <p class="text-[#808080] tracking-widest text-xs md:text-lg">ACERCA DE NOSOTROS</p>
                <h3 class="text-2xl text-primary md:text-4xl">Facilitamos, diseñamos e implementamos sistemas <span class="font-bold">de gestión de políticas de integridad empresarial.</span></h3>
                <p class="text-sm text-primary mt-5 md:text-lg">Emplea metodologías y herramientas de las mejores prácticas internacionales, así como brinda capacitación para apoyar a las empresas a eficientar sus procesos, así como implementar controles para el logro de sus objetivos.</p>
                <div class="mt-7">
                    <a href="{{ route('about') }}" class="btn btn-primary">
                        ACERCA DE NOSOTROS
                    </a>
                </div>
            </div>
            <div class="w-full mt-10">
                <img class="w-full" src="{{ asset('images/acerca-image.jpg') }}" alt="ACERCA DE NOSOTROS">
            </div>
        </div>
    </div>
</section>
<section>
    <div class="py-10 md:py-20 px-6" style="background-image: url({{ asset('images/capacitacion-bg.jpg') }})">
        <div class="text-center">
            <h2 class="text-xl text-white md:text-2xl">Programas de <span class="font-bold">Capacitación</span></h2>
            <div class="w-32 h-0.5 bg-white mx-auto mt-5"></div>
        </div>
        <div class="w-full mt-10 grid grid-cols-1 gap-y-10 md:grid-cols-3 md:gap-x-3 container mx-auto">
            <div class="text-center">
                <img class="w-full" src="{{ asset('images/grand-prix-experience.jpg') }}" alt="Grand Prix">
                <h4 class="text-white font-bold mt-3 md:text-lg">Grand Prix Experience</h4>
            </div>
            <div class="text-center">
                <img class="w-full" src="{{ asset('images/puppet-challenge.jpg') }}" alt="Grand Prix">
                <h4 class="text-white font-bold mt-3 md:text-lg">Puppet Challange</h4>
            </div>
            <div class="text-center">
                <img class="w-full" src="{{ asset('images/lego-experiment.jpg') }}" alt="Grand Prix">
                <h4 class="text-white font-bold mt-3 md:text-lg">Lego Experiment</h4>
            </div>
        </div>
        <div class="text-center mt-10">
            <a href="{{ route('programs') }}" class="btn btn-outline">Ver programas</a>
        </div>
    </div>
</section>
<section class="mt-10">
    <div class="px-6 container mx-auto">
        <div class="text-center mb-5">
            <p class="text-[#808080] tracking-widest text-xs md:text-lg">BLOG</p>
            <h3 class="text-2xl md:text-3xl text-primary">Ver Últimas Entradas</h3>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-3 md:gap-6">
            <div>
                <img src="{{ asset('images/blog/blog-1.jpg') }}" alt="">
                <h4 class="font-bold text-primary mt-3">
                    Lorem ipsum dolor sit amet
                </h4>
                <p class="text-primary text-sm">
                    Lorem ipsum dolor sit amet
                </p>
                <a href="#" class="text-primary font-bold text-xs">LEER MÁS</a>
            </div>
            <div>
                <img src="{{ asset('images/blog/blog-2.jpg') }}" alt="">
                <h4 class="font-bold text-primary mt-3">
                    Lorem ipsum dolor sit amet
                </h4>
                <p class="text-primary text-sm">
                    Lorem ipsum dolor sit amet
                </p>
                <a href="#" class="text-primary font-bold text-xs">LEER MÁS</a>
            </div>
            <div>
                <img src="{{ asset('images/blog/blog-3.jpg') }}" alt="">
                <h4 class="font-bold text-primary mt-3">
                    Lorem ipsum dolor sit amet
                </h4>
                <p class="text-primary text-sm">
                    Lorem ipsum dolor sit amet
                </p>
                <a href="#" class="text-primary font-bold text-xs">LEER MÁS</a>
            </div>
            <div>
                <img src="{{ asset('images/blog/blog-4.jpg') }}" alt="">
                <h4 class="font-bold text-primary mt-3">
                    Lorem ipsum dolor sit amet
                </h4>
                <p class="text-primary text-sm">
                    Lorem ipsum dolor sit amet
                </p>
                <a href="#" class="text-primary font-bold text-xs">LEER MÁS</a>
            </div>
        </div>
        <div class="mt-5 md:mt-10 text-center">
            <a href="{{ route('blogs') }}" class="btn btn-primary">ver todo</a>
        </div>
    </div>
</section>
@endsection