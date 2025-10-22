<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserProfile extends Component
{
    public $showModalLogout = false;
    public function openModalLogout()
    {
        $this->showModalLogout = true;
    }

    public function closeModalLogout()
    {
        $this->showModalLogout = false;
    }
    public function logout()
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();

        return redirect()->route('home'); // ou 'login'
    }

    public function mount()
    {

    }
    public function render()
    {
        return view('livewire.user-profile');
    }
}
