<?php

namespace App\Livewire;

use App\Models\Property;
use Livewire\Component;

class PropertyDetails extends Component
{
    public $showModal = false;
    public $guest;
    public $chekIn;
    public $chekOut;
    public $property;

    public function mount($property)
    {
        $this->property = Property::find($property);
    }

    public function openModal()
    {
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->showModal = false;
    }

    public function render()
    {
        return view('livewire.property-details');
    }
}
