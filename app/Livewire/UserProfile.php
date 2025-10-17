<?php

namespace App\Livewire;

use App\Models\Property;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserProfile extends Component
{
     public $showModal = false;
     public $isToSave = false;
     public $name;
     public $email;
     public $phone;
     public $address;

     public $favorites;

     public $userAuth;
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
        $this->userAuth = auth()->user();
        $this->favorites = auth()->user()->favorites;
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
