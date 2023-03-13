@extends('layouts.guest')
@section('content')
@include('frontend.partials._header-section', [
    'title' => 'BLOG',
    'image' => asset('images/blog/blog-header.jpg')
])
<section class="mt-10">
    <div class="px-6">
        <div class="text-center mb-5">
            <p class="text-[#808080] tracking-widest text-xs">BLOG</p>
            <h3 class="text-2xl text-primary">Ver Últimas Entradas</h3>
        </div>
        <div class="grid grid-cols-2 gap-3">
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
       
    </div>
</section>
@endsection