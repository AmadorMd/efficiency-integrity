<div class="w-full mt-10 grid grid-cols-2 md:grid-cols-4 gap-10">
    @if ($this->records()->count() > 0)
        @foreach ($this->records() as $program)
            @livewire('frontend.programs.single', ['program' => $program], key($program->id))
        @endforeach
    @endif
</div>
