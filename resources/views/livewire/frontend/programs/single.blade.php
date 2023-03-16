<div class="text-center">
    <img class="w-full" src="{{ Storage::disk('public')->url($program->image_url) }}" alt="Grand Prix">
    <h4 class="text-primary font-bold mt-3 md:text-lg">{{ $program->title }}</h4>
    <div class="mt-5">
        <button wire:click="ToggleModal" class="btn btn-primary">
            conoce más
        </button>
    </div>
    <div class="h-screen w-screen bg-black fixed top-0 left-0 bg-opacity-40 place-items-center {{ $modalOpen?'grid':'hidden' }}">
        <div class="bg-white py-3 px-6 rounded-md w-11/12 max-w-lg">
           <h4 class="font-bold text-primary text-lg md:text-xl inline-flex items-center">
              {{ $program->title }}
            </h4>
            <p class="text-left text-primary mt-5">
                {!! $program->description !!}
            </p>
           <div class="inline-flex items-center justify-center w-full mt-5">
            <button wire:click="ToggleModal" class="bg-primary text-xs px-3 py-1 text-white tracking-wide rounded-full font-bold">Cerrar</button>
        </div>
    </div>
</div>
