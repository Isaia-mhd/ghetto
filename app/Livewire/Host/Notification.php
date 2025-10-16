<?php

namespace App\Livewire\Host;

use Livewire\Component;

class Notification extends Component
{
    public array $notifications;
    public function render()
    {
        return view('livewire.host.notification');
    }
}
