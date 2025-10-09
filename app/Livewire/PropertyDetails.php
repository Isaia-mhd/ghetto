<?php

namespace App\Livewire;

use Livewire\Component;

class PropertyDetails extends Component
{
    public $showModal = false;
    public $guest;
    public $chekIn;
    public $chekOut;

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
