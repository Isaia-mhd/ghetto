<?php

namespace App\Livewire\Host;

use App\Livewire\UserProfile;
use App\Models\Property;
use App\Models\User;
use Livewire\Component;

class Dashboard extends Component
{
    public $property;
    public $showModal = false;

    public function openModal()
    {
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->showModal = false;
    }
    public function logout(UserProfile $userProfile)
    {
        return $userProfile->logout();
    }
    public function mount(Property $property)
    {
        $this->property = $property;
    }
    public function render()
    {
        return view('livewire.host.dashboard');
    }
}
