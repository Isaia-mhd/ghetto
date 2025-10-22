<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class ProfileComponent extends Component
{
    public $isToSave = false;
    public $name;
    public $email;
    public $phone;
    public $address;

    public $userAuth;
    public function mount()
    {
        $this->name = auth()->user()->name;
        $this->email = auth()->user()->email;
        $this->phone = auth()->user()->phone;
        $this->address = auth()->user()->address;
        $this->userAuth = auth()->user();
    }
    public function edit()
    {
        $this->isToSave = !$this->isToSave;
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
        return view('livewire.profile-component');
    }
}
