<?php

namespace App\Livewire;

use Livewire\Component;
use \App\Models\Property as Appartment;

class Property extends Component
{
    public $properties;
    public function mount()
    {
        $this->properties = Appartment::all();
    }
    public function render()
    {
        return view('livewire.property');
    }
}
