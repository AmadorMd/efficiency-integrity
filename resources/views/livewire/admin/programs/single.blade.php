<article class="flex flex-row items-center mt-5">
    <div class="w-1/3"> 
        <img class="w-full" src="{{ Storage::disk('public')->url($program->image_url) }}" alt="">
    </div>
    <div class="w-2/3 pl-5">
        <h4 class="font-bold text-primary mt-3 md:text-lg">
            {{ $program->title }}
        </h4>
        <p class="text-primary text-sm">
            {!! Str::words($program->description, 10) !!}
        </p>
        <p class="text-xs text-gray-500">{{ $program->created_at }}</p>
        <div class="flex flex-row items-center justify-start mt-4 gap-3">
            <a href="{{ route('programs.edit', $program) }}" class="bg-indigo-400 text-xs px-3 py-1 text-white tracking-wide rounded-full font-bold">
                Editar
            </a>
            <button wire:click="ToggleModal" class="bg-red-500 text-xs px-3 py-1 text-white tracking-wide rounded-full font-bold">Eliminar</button>
        </div>
    </div>
    <div class="h-screen w-screen bg-black fixed top-0 left-0 bg-opacity-40 place-items-center {{ $modalOpen?'grid':'hidden' }}">
        <div class="bg-white py-3 px-6 rounded-md max-w-md">
           <h4 class="font-bold text-primary text-lg inline-flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-red-500 w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
              </svg>
              <span class="ml-2">¿Estas seguro de eliminar este elemento?</span>
            </h4>
            <p class="text-center text-primary">Esta acción no se podra deshacer.</p>
           <div class="inline-flex items-center justify-between w-full mt-10">
            <button wire:click="ToggleModal" class="bg-primary text-xs px-3 py-1 text-white tracking-wide rounded-full font-bold">Cancelar</button>
            <button wire:click="delete" class="bg-red-500 text-xs px-3 py-1 text-white tracking-wide rounded-full font-bold">Si, Eliminar</button>
           </div>
        </div>
    </div>
</article>
