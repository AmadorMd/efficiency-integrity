<?php

namespace App\Http\Livewire\Frontend\Programs;

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
    public function render()
    {
        return view('livewire.frontend.programs.single');
    }
}
