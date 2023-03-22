@extends('layouts.guest')
@section('content')
@include('frontend.partials._header-section', [
    'title' => 'BLOG',
    'image' => asset('images/blog/blog-header.jpg')
])
<section class="mt-10">
    <div class="px-6">
        <div class="text-center px-0 md:px-40 mb-10">
            <p class="text-lg md:text-xl text-primary">
                Somos formadores de una comunidad empresarial que promueva la integridad, ya que es fundamental para construir una sociedad justa y equitativa. Las políticas de integridad en las empresas son esenciales para fomentar la transparencia, la honestidad y la ética en el mundo de los negocios. ¡Es hora de que las empresas tomen medidas concretas para mantenerse en línea con sus valores y actuar con integridad en todas las áreas de su actividad
            </p>
        </div>
        <div class="text-center mb-5">
            <p class="text-[#808080] tracking-widest text-xs md:text-base">BLOG</p>
            <h3 class="text-2xl md:text-3xl font-bold text-primary">Ver Últimas Entradas</h3>
        </div>
        @livewire('frontend.blogs.index', ['entries' => new \App\Models\Blog])
       
    </div>
</section>
@endsection