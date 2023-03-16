<?php

namespace App\Http\Livewire\Frontend\Programs;

use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $programs;
    public function mount($programs){
        $this->programs = $programs;
    }
    public function records(){
        $builder = $this->programs;
        return $builder->paginate(5);
    }
    public function render()
    {
        return view('livewire.frontend.programs.index');
    }
}
