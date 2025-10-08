<?php

namespace App\Livewire;

use Livewire\Component;

class UserProfile extends Component
{
     public $isProfile = true;
     public $isFavorites = false;
     public $isBooking = false;
    public function showTab($tab)
    {
        switch ($tab) {
            case 'profile':
                $this->isProfile = true;
                $this->isFavorites = !$this->isProfile;
                $this->isBooking = !$this->isProfile;
                break;
            case 'favorites':
                $this->isFavorites = true;
                $this->isProfile = !$this->isFavorites;
                $this->isBooking = !$this->isFavorites;
                break;
            case 'booking':
                $this->isBooking = true;
                $this->isFavorites = !$this->isBooking;
                $this->isProfile = !$this->isBooking;
                break;
            default:
                $this->isProfile = true;
                $this->isFavorites = !$this->isProfile;
                $this->isBooking = !$this->isProfile;
                break;
        }
    }
    public function render()
    {
        return view('livewire.user-profile');
    }
}
