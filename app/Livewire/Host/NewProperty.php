<?php

namespace App\Livewire\Host;

use Livewire\Component;

class NewProperty extends Component
{
    public $step = 1;
    public function next()
    {
        $this->step++;
    }
    public function back()
    {
        $this->step--;
    }
    public function render()
    {
        return view('livewire.host.new-property');
    }
}
