<?php

namespace App\Livewire;

use App\Models\Property;
use Livewire\Component;

class PropertyCard extends Component
{
    public $isToDelete = false;
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
    public function openModalDelete(){
        $this->isToDelete = true;
    }

    public function closeModalDelete(){
        $this->isToDelete = false;
    }

    public function destroy(Property $property)
    {
        $property->delete();
        $this->isToDelete = false;
        session()->flash("success", "Propriété supprimé avec succès");
        return redirect()->route('property');
    }
    public function render()
    {
        return view('livewire.property-card');
    }
}
