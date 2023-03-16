<div>
    <div class="inline-flex justify-between w-full">
        <select wire:model="paginate" class="bg-white border border-primary px-3 py-1 rounded-full">
            <option value="1">1</option>
            <option value="5">5</option>
            <option value="10">10</option>
            <option value="50">50</option>
        </select>
        <input wire:model="search" type="text" class="bg-white border border-primary px-3 py-1 rounded-full placeholder:text-primary" placeholder="Buscar por titulo...">
    </div>
    @if($this->records()->total() > 0)
        @foreach ($this->records() as $entry)
            @livewire('admin.blogs.single', ['entry' => $entry], key($entry->id))
        @endforeach
        <div>
            {{ $this->records()->links() }}
        </div>
    @endif
</div>
