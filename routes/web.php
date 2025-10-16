<?php

use App\Livewire\Auth\Register;
use App\Livewire\Booking;
use App\Livewire\Cart;
use App\Livewire\Home;
use App\Livewire\Host\Dashboard;
use App\Livewire\Host\NewProperty;
use App\Livewire\Property;
use App\Livewire\Contact;
use App\Livewire\About;
use App\Livewire\Auth\Login;
use App\Livewire\PropertyDetails;
use App\Livewire\UserProfile;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/properties', Property::class)->name('property');
Route::get('/properties/{property}', PropertyDetails::class)->name('property.details');
Route::get('contact', Contact::class)->name('contact');
Route::get('about', About::class)->name('about');

Route::middleware("auth")->group(function(){
    Route::get('profile', UserProfile::class)->name('profile');
    Route::get('profile/books', UserProfile::class)->name('profile.books');
    Route::get('profile/favorites', UserProfile::class)->name('profile.favorites');
    Route::get('dashboard', Dashboard::class)->name('dashboard');
    Route::get('dashboard/hotels', Dashboard::class)->name('dashboard.hotels');
    Route::get('dashboard/hotels/new', Dashboard::class)->name('dashboard.hotels.new');
    Route::get('dashboard/notifications', Dashboard::class)->name('dashboard.notifications');
    Route::get('dashboard/terms', Dashboard::class)->name('dashboard.terms');
    Route::get('dashboard/properties', Dashboard::class)->name('dashboard.properties');

    // Route::get('profile/dashboard/house', UserProfile::class)->name('profile.dashboard.house');
    Route::get('dashboard/properties/new', Dashboard::class)->name('dashboard.house.new');

});

Route::middleware("guest")->group(function(){
    Route::get('login', Login::class)->name('login');
    Route::get('register', Register::class)->name('register');
});
