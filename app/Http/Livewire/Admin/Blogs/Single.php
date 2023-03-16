<?php

namespace App\Http\Livewire\Admin\Blogs;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Single extends Component
{
    public $entry, $modalOpen = false;
    public function mount($entry){
        $this->entry = $entry;
    }

    public function ToggleModal(){
        $this->modalOpen = !$this->modalOpen;
    }
    public function delete(){
        Storage::disk('public')->delete($this->entry->image_url);
        $this->entry->delete();
        $this->emit("DeleteEvent");
        $this->ToggleModal();
    }
    public function render()
    {
        return view('livewire.admin.blogs.single');
    }
}
