<article class="text-center mt-10 lg:mt-0">
    <img class="w-full" src="{{ Storage::disk('public')->url($program->image_url) }}" alt="Grand Prix">
    <h4 class="font-bold mt-3 md:text-lg {{ request()->routeIs('home')?'text-white':'text-primary' }}">{{ $program->title }}</h4>
    <div class="mt-5">
        <button wire:click="ToggleModal" class="btn btn-primary">
            conoce más
        </button>
    </div>
    <div class="h-screen w-screen bg-black fixed top-0 left-0 bg-opacity-40 place-items-center z-50 {{ $modalOpen?'grid':'hidden' }}">
        <div class="bg-white py-3 px-6 rounded-md w-11/12 max-w-lg">
           <h4 class="font-bold text-primary text-lg md:text-xl inline-flex items-center">
              {{ $program->title }}
            </h4>
            <p class="text-left text-primary mt-5">
                {!! $program->description !!}
            </p>
            <div class="inline-flex items-center justify-center w-full mt-5">
                <button wire:click="ToggleModal" class="bg-transparent text-xs px-3 py-1 text-primary border border-primary tracking-wide rounded-full font-bold hover:bg-primary hover:text-white">Cerrar</button>
                <a href="{{ route('contact') }}" class="bg-primary text-xs px-3 py-1 text-white tracking-wide rounded-full font-bold hover:bg-transparent hover:text-primary border border-primary ml-2">
                    Contáctanos
                </a>
            </div>
        </div>
    </div>
</article>
