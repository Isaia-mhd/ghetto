<?php

namespace App\Livewire\Host;

use Livewire\Component;

class Notification extends Component
{
    public $notifications;
    public function mount()
    {
        $this->notifications = auth()->user()->notifications;
        // dd($this->notifications);
    }
    public function render()
    {
        return view('livewire.host.notification');
    }
}
