<?php

namespace App\Livewire\Host;

use App\Models\Property;
use Livewire\Component;

class ListProperty extends Component
{
    public $properties;

    public function mount()
    {
        $this->properties = Property::where('owner_id', auth()->id())->get();
    }
    public function render()
    {
        return view('livewire.host.list-property');
    }
}
