<?php

namespace App\Livewire\Host;

use App\Models\Hotel;
use Livewire\Component;

class Hotels extends Component
{
    public $hotels;
    public function mount()
    {
        $this->hotels = Hotel::where('owner_id', auth()->id())->get();
    }
    public function render()
    {
        return view('livewire.host.hotels');
    }
}
