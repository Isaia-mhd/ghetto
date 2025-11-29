<?php

namespace App\Livewire;

use Livewire\Component;

class ViewNotification extends Component
{
    public $notification;
    public function markAsRead()
    {
        $this->notification->markAsRead();
    }
    public function render()
    {
        return view('livewire.view-notification');
    }
}
