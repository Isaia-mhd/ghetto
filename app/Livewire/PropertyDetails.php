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
    public $favorite = false;
    public function favor()
    {
        $this->favorite = !$this->favorite;

        if($this->favorite)
        {
            auth()->user()->favorites()->syncWithoutDetaching([$this->property->id]);
        } else{
            auth()->user()->favorites()->detach($this->property->id);
        }

    }

    public function mount(Property $property)
    {
        $this->property = $property;
        $this->favorite = auth()->user()->favorites->contains($this->property->id);
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
