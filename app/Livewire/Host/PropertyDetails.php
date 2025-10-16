<?php

namespace App\Livewire\Host;

use App\Models\Property;
use Livewire\Component;

class PropertyDetails extends Component
{
    public $showModal = false;
    public $guest;
    public $chekIn;
    public $chekOut;
    public $property;

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
        return view('livewire.host.property-details');
    }
}
