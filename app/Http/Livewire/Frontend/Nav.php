<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;

class Nav extends Component
{
    public $menuOpen = false;
    public function handleMenuOpen(){
        $this->menuOpen = !$this->menuOpen;
    }
    public function render()
    {
        return view('livewire.frontend.nav');
    }
}
