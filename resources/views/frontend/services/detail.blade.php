@extends('layouts.guest')
@section('content')
@include('frontend.partials._header-section', [
    'title' => 'NUESTROS SERVICIOS',
    'image' => asset('images/services/detail/servicios_detail-header.jpg')
])
<section class="my-10">
    <div class="w-full flex flex-col px-6 gap-10">
        <div class="w-full">
            <h2 class="text-2xl text-primary font-bold">Sistema De Gestión De Integridad Para Las Empresas</h2>
            <p class="text-primary mt-5">¿Qué ofrece el Sistema de Gestión de Integridad para las Empresas?</p>
            <ul class="max-w-md space-y-1 text-primary list-inside mt-5">
                <li class="flex items-center">
                    <svg class="w-6 h-6 mr-1.5 text-secondary flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                    Compromiso con nuestros clientes, proveedores y sociedad en general con la adecuada gestión de Integridad.
                </li>
                <li class="flex items-center">
                    <svg class="w-6 h-6 mr-1.5 text-secondary flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                    Diagnóstico acertado de los riesgos y su impacto.
                </li>
                <li class="flex items-center">
                    <svg class="w-6 h-6 mr-1.5 text-secondary flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                    Gestionar mediante políticas los riesgos.
                </li>
                <li class="flex items-center">
                    <svg class="w-6 h-6 mr-1.5 text-secondary flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                    Acciones que ayuden a cumplir los objetivos y las políticas. 
                </li>
                <li class="flex items-center">
                    <svg class="w-6 h-6 mr-1.5 text-secondary flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                    Seguimiento, control y mejora continua de la Integridad. 
                </li>
                <li class="flex items-center">
                    <svg class="w-6 h-6 mr-1.5 text-secondary flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                    Informar continuamente los avances y logros a los interesados.
                </li>
            </ul>
            <div class="mt-5">
                <a href="{{ route('services') }}" class="btn btn-primary">
                    ver servicios
                </a>
            </div>
        </div>
        <div class="w-full">
            <img src="{{ asset('images/services/detail/image-detail.jpg') }}" alt="">
        </div>
    </div>
</section>
<section>
    <div class="bg-custom-gray py-10">
        <div class="text-center">
            <h2 class="text-primary font-bold text-2xl">Otros servicios</h2>
        </div>
        <div class="w-full px-6 grid grid-cols-1 mt-5 gap-5">
            @include('frontend.partials.services._card', [
                'icon' => asset('images/services/sistema-gestion.png'),
                'title' => 'Sistema De Gestión De Integridad Para Las Empresas.',
                'description' => 'Compromiso con nuestros clientes, proveedores y sociedad en general con la adecuada gestión de Integridad.'
            ])
            @include('frontend.partials.services._card', [
                'icon' => asset('images/services/codigo-conducta.png'),
                'title' => 'Código De Conducta.',
                'description' => 'Nuestro proceso incluye la elaboración de un documento detallado que incluya la Misión, Visión, Objetivos y Valores.'
            ])
            @include('frontend.partials.services._card', [
                'icon' => asset('images/services/programa-controles.png'),
                'title' => 'Programa De Controles Y Auditoria De Integridad.',
                'description' => 'E&I Ofrece un servicio de implementación de sistemas de control, vigilancia y auditoría de integridad en su organización.'
            ])
            @include('frontend.partials.services._card', [
                'icon' => asset('images/services/politicas-recursos.png'),
                'title' => 'Políticas De Recursos Humanos.',
                'description' => 'Nuestra empresa ofrece el servicio para implementar la cultura de inclusión y respeto a los derechos humanos en todas las áreas de su operación.'
            ])
            @include('frontend.partials.services._card', [
                'icon' => asset('images/services/transaparencia.png'),
                'title' => 'Transparencia Y Confidencialidad.',
                'description' => 'E&I se compromete a promover la transparencia y la publicidad de los intereses de su organización en todas sus operaciones.'
            ])

        </div>
    </div>
</section>
@endsection