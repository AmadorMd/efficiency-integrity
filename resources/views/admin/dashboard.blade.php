@extends('layouts.app')
@section('content')
<section class="bg-yellow-500 px-3 py-3 rounded-md">
    <div>
        <h1 class="text-primary text-xl">Hola <span class="font-bold">{{ auth()->user()->name }}</span></h1>
        <p class="text-primary">
            Bienvenido al administrador de <span class="font-bold">Efficiency & Integrity</span>
        </p>
        <div class="mt-3 text-right">
            <a href="#" class="bg-primary text-xs px-3 py-1 text-white tracking-wide rounded-full font-bold">
                Crear un nueva entrada
            </a>
        </div>
    </div>
</section>
<section class="mt-3 bg-gray-100 px-3 py-5 rounded-md">
    <p class="text-[#808080] tracking-widest text-xs md:text-lg">BLOG</p>
    <h3 class="text-2xl md:text-3xl text-primary">Entradas más recientes</h3>
    <div class="mt-5 flex flex-col">
        @livewire('admin.blogs.index', ['entries' => new \App\Models\Blog])
    </div>
</section>
@endsection