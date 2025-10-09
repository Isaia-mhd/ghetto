<?php

namespace App\Livewire\Auth;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Services\Auth\RegisterService;
use Hash;
use Illuminate\Validation\Rules\Password;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Register extends Component
{
    public $name = "";
    public $email = "";
    public $password = "";
    public function register(RegisterService $registerService)
    {
        $this->validate([
            "name" => "required|max:250",
            "email" => "required|email|unique:users",
            "password" => ["required", Password::min(8)->letters()->mixedCase()->numbers()->symbols()]
        ]);
        return $registerService->storeUser($this->name, $this->email, $this->password);
    }
    public function render()
    {
        return view('livewire.auth.register');
    }
}
