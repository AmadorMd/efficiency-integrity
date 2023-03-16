@extends('layouts.app')
@section('content')

<section class="mt-3 bg-gray-100 px-3 py-2 rounded-md">
    <div class="w-full flex flex-row justify-between items-center">
        <div>
            <p class="text-[#808080] tracking-widest text-xs md:text-lg">Programas</p>
            <h3 class="text-2xl md:text-3xl text-primary">Todos los programas</h3>
        </div>
        <a href="{{ route('programs.create') }}" class="bg-indigo-400 text-xs px-3 py-1 text-white tracking-wide rounded-full font-bold">
            Nuevo programa
        </a>
    </div>
</section>
<section class="mt-3 bg-gray-100 px-3 py-5 rounded-md">
    <div class="flex flex-col gap-y-4">
        @livewire('admin.programs.index', ['programs' => new \App\Models\Program])
    </div>
</section>
@endsection