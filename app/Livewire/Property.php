<?php

namespace App\Livewire;

use Livewire\Component;

class Property extends Component
{
    public $properties;
    public function mount()
    {
        $this->properties =\App\Models\Property::all();
    }
    public function render()
    {
        return view('livewire.property');
    }
}
