<?php

use App\Livewire\Auth\Register;
use App\Livewire\Booking;
use App\Livewire\Cart;
use App\Livewire\Home;
use App\Livewire\Property;
use App\Livewire\Contact;
use App\Livewire\Auth\Login;
use App\Livewire\PropertyDetails;
use App\Livewire\UserProfile;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/properties', Property::class)->name('property');
Route::get('/properties/1', PropertyDetails::class)->name('property.details');
Route::get('/dashboard', UserProfile::class)->name('profile');
Route::get('login', Login::class)->name('login');
Route::get('register', Register::class)->name('register');
Route::get('contact', Contact::class)->name('contact');
