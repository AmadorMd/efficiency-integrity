@extends('layouts.guest')
@section('content')
@include('frontend.partials._header-section', [
    'title' => 'Programas de Capacitación',
    'image' => asset('images/about/about-header.jpg')
])
<section class="mt-10 md:mt-20">
    <div class="w-full px-6 container mx-auto">
        <h2 class="text-center text-2xl md:text-3xl font-bold text-primary">
            Conoce los programas que tenemos para ti
        </h2>
        @livewire('frontend.programs.index', ['programs' => new \App\Models\Program])
    </div>
    
</section>
@endsection