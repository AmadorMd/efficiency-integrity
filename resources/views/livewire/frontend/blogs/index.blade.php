<div class="grid grid-cols-2 md:grid-cols-4 gap-3 container mx-auto">
    @if ($this->records()->count() > 0)
        @foreach ($this->records() as $entry)
        <div>
            <img src="{{ Storage::disk('public')->url($entry->image_url) }}" alt="">
            <h4 class="font-bold text-primary mt-3 md:text-lg">
                {{ $entry->title }}
            </h4>
            <p class="text-primary text-sm">
                Lorem ipsum dolor sit amet
            </p>
            <a href="{{ route('blogs.entry', [
                'entry' => $entry
            ]) }}" class="text-primary font-bold text-xs">LEER MÁS</a>
        </div>
        @endforeach
    @endif
</div>
