@extends('layouts.guest')
@section('content')
@include('frontend.partials._header-section', [
    'title' => 'SERVICIOS',
    'image' => asset('images/services/servicios-header.jpg')
])
<section>
    <div class="bg-custom-gray py-10">
        <div class="text-center">
            <h2 class="text-primary font-bold text-2xl">Contamos con los siguientes <br> <span class="text-secondary">servicios para ti</span></h2>
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