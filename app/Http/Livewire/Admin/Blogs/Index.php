<?php

namespace App\Http\Livewire\Admin\Blogs;

use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $entries, $paginate = 5, $search;
    public $listeners = ['DeleteEvent'];
    public function mount($entries){
        $this->entries = $entries;
    }
    public function builder(){
        return $this->entries;
    }
    public function records(){
        $builder = $this->builder();
        return $builder->when($this->search, function($q){
            $q->where('title', 'LIKE', '%'.$this->search.'%');
        })->paginate($this->paginate);
    }
    public function DeleteEvent(){
        session()->flash('success', 'Entrada eliminada con éxito.');
    }
    public function render()
    {
        return view('livewire.admin.blogs.index');
    }
}
