<?php

namespace App\Livewire;

use App\Models\Property;
use Livewire\Component;

class PropertyCard extends Component
{
    public Property $property;
    public bool $showImageModal = false;
    public $images;

    public function showImageCarousel()
    {
        $this->images = $this->property->images ?? [];
        $this->showImageModal = true;
    }
    public function closeImageCarousel()
    {
        $this->showImageModal = false;
    }
    public function render()
    {
        return view('livewire.property-card');
    }
}
