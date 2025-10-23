<?php

namespace App\Livewire;

use App\Models\Booking;
use Livewire\Component;

class BookingComponent extends Component
{
    public $upComingActive = true;
    public $pastActive = false;

    public $myActualBookings;
    public $myPastBookings;

    public function showTab(string $tab)
    {
        $this->upComingActive = $tab === 'upcoming';
        $this->pastActive = !$this->upComingActive;
    }
    public function mount()
    {
        // $this->myActualBookings = auth()->user()->bookings->where('check_out' <= now())->get();
        $this->myActualBookings = Booking::where('user_id', auth()->id())
                                            ->where('check_out', '>=', now())->get();
        $this->myPastBookings = Booking::where('user_id', auth()->id())
                                            ->where('check_out', '<', now())->get();
    }
    public function render()
    {
        return view('livewire.booking-component');
    }
}
