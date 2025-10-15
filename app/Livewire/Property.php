<?php

namespace App\Livewire;

use Livewire\Component;
use \App\Models\Property as Appartment;

class Property extends Component
{
    public $properties;

    public $images;
    public $showImageModal = false;
    public function mount()
    {
        $this->properties = Appartment::all();
    }

    public function showImageCarousel(Appartment $property)
    {
        $this->showImageModal = true;
        $this->images = $property->images;
    }
    public function closeImageCarousel()
    {
        $this->showImageModal = false;
    }
    public function render()
    {
        return view('livewire.property');
    }
}
