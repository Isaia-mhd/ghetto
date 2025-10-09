<?php

namespace App\Services\Auth;

use App\Models\User;
use Hash;
use Illuminate\Validation\Rules\Password;

final class RegisterService
{
    public function storeUser($name, $email, $password)
    {
        User::create([
            "name" => $name,
            "email" => $email,
            "password" => Hash::make($password)
        ]);
        return redirect()->route("login");
    }
}

