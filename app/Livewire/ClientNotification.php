<?php

namespace App\Livewire;

use Livewire\Component;

class ClientNotification extends Component
{
    public $notifications;
    public function mount()
    {
        $this->notifications = auth()->user()->notifications;
        // dd($this->notifications);
    }
    public function markAsRead($id)
    {
         $notification = auth()->user()->notifications()->find($id);

        if ($notification) {
            if(!$notification->read_at)
            {
                $notification->markAsRead();
            } else{
                $notification->markAsUnread();
            }
        }
    }
    public function delete($id)
    {
         $notification = auth()->user()->notifications()->find($id);

        if ($notification) {
            $notification->delete();
        }
    }

    public function markAllAsRead()
    {
        foreach ($this->notifications as $notification) {
            $notification->markAsRead();
        }
    }
    public function render()
    {
        return view('livewire.client-notification');
    }
}
