@extends('layouts.guest')
@section('content')
@include('frontend.partials._header-section', [
    'title' => 'Programas de Capacitación',
    'image' => asset('images/about/about-header.jpg')
])
<section class="mt-10">
    <div class="w-full px-6">
        <h2 class="text-center text-2xl font-bold text-primary">
            Conoce los programas que tenemos para ti
        </h2>
        <div class="w-full mt-10 grid grid-cols-2 gap-5">
            <div class="text-center">
                <img class="w-full" src="{{ asset('images/grand-prix-experience.jpg') }}" alt="Grand Prix">
                <h4 class="text-primary font-bold mt-3">Grand Prix Experience</h4>
                <div class="mt-5">
                    <a href="#" class="btn btn-primary">
                        conoce más
                    </a>
                </div>
            </div>
            <div class="text-center">
                <img class="w-full" src="{{ asset('images/puppet-challenge.jpg') }}" alt="Grand Prix">
                <h4 class="text-primary font-bold mt-3">Puppet Challange</h4>
                <div class="mt-5">
                    <a href="#" class="btn btn-primary">
                        conoce más
                    </a>
                </div>
            </div>
            <div class="text-center">
                <img class="w-full" src="{{ asset('images/lego-experiment.jpg') }}" alt="Grand Prix">
                <h4 class="text-primary font-bold mt-3">Lego Experiment</h4>
                <div class="mt-5">
                    <a href="#" class="btn btn-primary">
                        conoce más
                    </a>
                </div>
            </div>
            <div class="text-center">
                <img class="w-full" src="{{ asset('images/grand-prix-experience.jpg') }}" alt="Grand Prix">
                <h4 class="text-primary font-bold mt-3">Grand Prix Experience</h4>
                <div class="mt-5">
                    <a href="#" class="btn btn-primary">
                        conoce más
                    </a>
                </div>
            </div>
            <div class="text-center">
                <img class="w-full" src="{{ asset('images/puppet-challenge.jpg') }}" alt="Grand Prix">
                <h4 class="text-primary font-bold mt-3">Puppet Challange</h4>
                <div class="mt-5">
                    <a href="#" class="btn btn-primary">
                        conoce más
                    </a>
                </div>
            </div>
            <div class="text-center">
                <img class="w-full" src="{{ asset('images/lego-experiment.jpg') }}" alt="Grand Prix">
                <h4 class="text-primary font-bold mt-3">Lego Experiment</h4>
                <div class="mt-5">
                    <a href="#" class="btn btn-primary">
                        conoce más
                    </a>
                </div>
            </div>
        </div>
    </div>
    
</section>
@endsection