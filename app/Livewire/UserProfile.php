<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserProfile extends Component
{
     public $isProfile = true;
     public $isFavorites = false;
     public $isBooking = false;
     public $showModal = false;
     public $isToSave = false;
     public $name;
     public $email;
     public $phone;
     public $address;

     public function openModal()
    {
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->showModal = false;
    }

    public function logout()
    {
        Auth::logout();
        redirect()->route("home");
    }
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

    public function edit()
    {
        $this->isToSave = !$this->isToSave;
    }
    public function mount()
    {
        $this->name = auth()->user()->name;
        $this->email = auth()->user()->email;
        $this->phone = auth()->user()->phone;
        $this->address = auth()->user()->address;
    }
    public function update($user)
    {
        $user = User::find($user);
        $user->update([
            "name" => $this->name,
            "email" => $this->email,
            "phone" => $this->phone,
            "address" => $this->address
        ]);
        $this->isToSave = false;
        return redirect()->back();
    }
    public function render()
    {
        return view('livewire.user-profile');
    }
}
