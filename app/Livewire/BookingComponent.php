<?php

namespace App\Livewire;

use Livewire\Component;

class BookingComponent extends Component
{
    public $upComingActive = true;
    public $pastActive = false;

    public function showTab(string $tab)
    {
        $this->upComingActive = $tab === 'upcoming';
        $this->pastActive = !$this->upComingActive;
    }
    public function render()
    {
        return view('livewire.booking-component');
    }
}
