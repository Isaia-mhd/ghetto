<?php
namespace App\Livewire;

use Livewire\Component;

class NotificationCounter extends Component
{
    public function render()
    {
        $unread = auth()->user()
            ->notifications()
            ->whereNull('read_at')
            ->count();

        return view('livewire.notification-counter', [
            'unread' => $unread
        ]);
    }
}



