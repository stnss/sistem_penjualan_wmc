<?php

namespace App\Http\Livewire\Sidebar\Components;

use Livewire\Component;

class DropdownItem extends Component
{
    public $data = [];
    
    public function render()
    {
        return view('livewire.sidebar.components.dropdown-item');
    }
}
