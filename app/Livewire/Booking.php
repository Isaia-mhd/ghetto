<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Booking as Book;
use App\Models\Property;
use Carbon\CarbonPeriod;

class Booking extends Component
{
    public Property $property;
    public $guest;
    public $check_in;
    public $check_out;
    public $bookedDates = [];

    protected $rules = [
        'guest' => 'required|integer|min:1',
        'check_in' => 'required|date|after_or_equal:today',
        'check_out' => 'required|date|after:check_in',
    ];

    public function mount(Property $property)
    {
        $this->property = $property;

        // récupérer toutes les dates déjà réservées pour cette propriété
        $bookings = Book::where('property_id', $property->id)
            ->where('status', 'confirmed')
            ->get();

        $dates = [];
        foreach ($bookings as $b) {
            $period = CarbonPeriod::create($b->check_in, $b->check_out);
            foreach ($period as $date) {
                $dates[] = $date->format('Y-m-d');
            }
        }

        $this->bookedDates = $dates;
    }

    public function updated($field)
    {
        $this->validateOnly($field);
    }

    public function book()
    {
        $validated = $this->validate();
        Book::create([
            'property_id' => $this->property->id,
            'user_id' => auth()->id(),
            ...$validated,
            'status' => 'pending',
        ]);

        session()->flash('success', 'Réservation effectuée !');

        return redirect()->route('profile.books');
    }

    public function render()
    {
        return view('livewire.booking');
    }
}
