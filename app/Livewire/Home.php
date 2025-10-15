<?php

namespace App\Livewire;

use App\Models\Property;
use Livewire\Component;

class Home extends Component
{
    public $properties;
    public $lastListings;
    public function mount()
    {
        $this->lastListings = Property::latest()->take(4)->get();
        $this->properties = Property::all();
    }
    public function render()
    {
        return view('livewire.home');
    }
}
