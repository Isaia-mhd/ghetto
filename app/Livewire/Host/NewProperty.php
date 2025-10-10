<?php

namespace App\Livewire\Host;

use Livewire\Component;

class NewProperty extends Component
{
    public $step = 1;
    public $title;
    public $category;
    public $description;
    public $room;
    public $bed;
    public $bath;
    public $parking = false;
    public function next()
    {
        $this->step++;
    }
    public function back()
    {
        $this->step--;
    }
    public function setParking()
    {
        $this->parking = !$this->parking;
    }
    public function render()
    {
        return view('livewire.host.new-property');
    }
}
