<div>
    <form wire:submit.prevent="storeEntry" enctype="multipart/form-data">
        <div class="mb-5">
            <input wire:model="title" type="text" placeholder="Titulo" class="form-input">
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
        <h3 class="text-primary font-bold text-center">Imagen de blog</h3>
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
            <button class="bg-indigo-400 text-xs px-3 py-2 text-white tracking-wide rounded-full font-bold block w-full">
                Guardar Información
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
