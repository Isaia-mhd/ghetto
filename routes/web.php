<?php

use App\Livewire\Home;
use App\Livewire\Property;
use App\Livewire\Auth\Login;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/proprietes', Property::class)->name('property');
Route::get('login', Login::class)->name('login');
