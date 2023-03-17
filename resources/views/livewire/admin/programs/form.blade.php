<div>
    <form wire:submit.prevent="storeProgram" enctype="multipart/form-data">
        <div class="mb-5">
            <input wire:model.debounce.500ms="title" type="text" placeholder="Titulo" class="form-input">
            @error('title')
            <span class="text-sm font-bold text-red-500">{{ $message }}</span>
        @enderror
        </div>
        <input id="description" type="hidden" name="description" value="{{ $value }}">
        <div wire:ignore>
            <trix-editor  input="description"></trix-editor>
        </div>
        @error('value')
            <span class="text-sm font-bold text-red-500">{{ $message }}</span>
        @enderror
        <hr class="boder w-full border-primary my-5">
        <h3 class="text-primary font-bold text-center">Imagen de programa</h3>
        @if ($image)
            <img class="w-1/2 mx-auto" src="{{ $image->temporaryUrl() }}" alt="">
        @elseif($image_url)
            <img class="w-1/2 mx-auto" src="{{ Storage::disk('public')->url($image_url) }}" alt="">
        @endif
        <input type="file" name="image" id="image" class="form-input" wire:model="image">
        <span class="text-sm text-indigo-400">
            Imagén con formato jpg, jpeg y png, no debe execer los 1,500 MB
        </span>
        @error('image')
            <span class="text-sm font-bold text-red-500">{{ $message }}</span>
        @enderror
        <div class="mt-5">
            <span class="bg-gray-500"></span>
            <button class="bg-indigo-400 text-xs px-3 py-2 text-white tracking-wide rounded-full font-bold block w-full" wire:loading.class="bg-gray-500"  wire:loading.class.remove="bg-indigo-400 " wire:loading.attr="disabled">
                <span wire:loading.remove>
                    Guardar Información
                </span>
                <div wire:loading>
                    <div class="inline-flex">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 animate-spin">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                          </svg>
                          <span class="ml-2">Cargando...</span>      
                    </div>
                                 
                    
                </div>
            </button>
        </div>
    </form>
    <script>
        var trixEditor = document.getElementById("description")
    
        addEventListener("trix-blur", function(event) {
            @this.set('value', trixEditor.getAttribute('value'))
        })
    </script>
</div>
