<?php

use App\Livewire\Auth\Register;
use App\Livewire\Booking;
use App\Livewire\Cart;
use App\Livewire\Home;
use App\Livewire\Property;
use App\Livewire\Auth\Login;
use App\Livewire\PropertyDetails;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/proprietes', Property::class)->name('property');
Route::get('/proprietes/1', PropertyDetails::class)->name('property.details');
Route::get('proprietes/1/reservations', Booking::class)->name('cart');
Route::get('login', Login::class)->name('login');
Route::get('register', Register::class)->name('register');

