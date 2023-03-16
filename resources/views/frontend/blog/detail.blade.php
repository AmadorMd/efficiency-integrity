@extends('layouts.guest')
@section('content')
@include('frontend.partials._header-section', [
    'title' => 'BLOG | '.$entry->title,
    'image' => asset('images/blog/blog-header.jpg')
])
<section class="mt-10">
    <div class="px-6">
        <div class="text-center mb-5">
            <p class="text-[#808080] tracking-widest text-xs md:text-base">BLOG</p>
            <h3 class="text-2xl md:text-3xl font-bold text-primary">{{ $entry->title }}</h3>
        </div>
        <div class="flex flex-col md:flex-row-reverse flex-wrap container mx-auto">
            <div class="w-full md:w-1/2">
                <img class="w-1/2 mx-auto" src="{{ Storage::disk('public')->url($entry->image_url) }}" alt="">
            </div>
            <div class="w-full md:w-1/2 mt-10 md:mt-0">
                {!! $entry->description !!}
            </div>
        </div>
    </div>
    <div class="w-full text-center mt-10">
        <a href="{{ route('blogs') }}" class="btn btn-primary">
            volver al blog
        </a>
        @auth
            <a href="{{ route('blogs.edit', $entry) }}" class="btn btn-primary ml-4">
                Editar esta entrada
            </a>
        @endauth
    </div>
</section>
@endsection