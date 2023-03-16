<?php

namespace App\Http\Livewire\Admin\Programs;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Single extends Component
{
    public $program, $modalOpen = false;
    public function mount($program){
        $this->program = $program;
    }

    public function ToggleModal(){
        $this->modalOpen = !$this->modalOpen;
    }
    public function delete(){
        Storage::disk('public')->delete($this->program->image_url);
        $this->program->delete();
        $this->emit("DeleteEvent");
        $this->ToggleModal();
    }
    public function render()
    {
        return view('livewire.admin.programs.single');
    }
}
