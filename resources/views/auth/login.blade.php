@extends('layouts.guest')
@section('content')
<section class="bg-custom-gray h-screen w-screen flex justify-center items-center">
    <article class="bg-white rounded-md w-11/12 max-w-lg">
        <header class="bg-primary w-full rounded-t-md py-3">
            <img class="w-40 mx-auto" src="{{ asset('images/logo.svg') }}" alt="">
        </header>
        <div class="bg-white px-6 py-4 rounded-b-md">
            <h3 class="text-center text-primary font-bold text-xl">Inciar sesión</h3>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <input type="email" name="email" class="form-input {{ $errors->has('email')?'is-invalid':'' }}" placeholder="Correo eléctronico">
                @error('email')
                    <span class="text-sm font-bold text-red-500">{{ $message }}</span>
                @enderror
                <input type="password" name="password" class="form-input" placeholder="Password">
                @error('password')
                    <span class="text-sm font-bold text-red-500">{{ $message }}</span>
                @enderror
                <div class="text-center mt-5">
                    <button type="submit" class="btn btn-primary block w-full">
                        Iniciar
                    </button>
                </div>
            </form>
        </div>
    </article>
</section>
@endsection