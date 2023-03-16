@extends('layouts.guest')
@section('content')
@include('frontend.partials._header-section', [
    'title' => 'BLOG',
    'image' => asset('images/blog/blog-header.jpg')
])
<section class="mt-10">
    <div class="px-6">
        <div class="text-center mb-5">
            <p class="text-[#808080] tracking-widest text-xs md:text-base">BLOG</p>
            <h3 class="text-2xl md:text-3xl font-bold text-primary">Ver Últimas Entradas</h3>
        </div>
        @livewire('frontend.blogs.index', ['entries' => new \App\Models\Blog])
       
    </div>
</section>
@endsection