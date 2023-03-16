<?php

namespace App\Http\Livewire\Frontend\Blogs;

use Livewire\Component;

class Index extends Component
{
    public $entries;
    public function mount($entries){
        $this->entries = $entries;
    }
    public function builder(){
        return $this->entries;
    }
    public function records(){
        $builder = $this->builder();
        return $builder->paginate(10);
    }
    public function render()
    {
        return view('livewire.frontend.blogs.index');
    }
}
