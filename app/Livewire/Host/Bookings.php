<?php

namespace App\Livewire\Host;

use App\Models\Booking;
use App\Services\Booking\BookingNotification;
use Livewire\Component;

class Bookings extends Component
{
    public $bookings;
    public $bookingNotification;
    public function mount()
    {
        // $this->bookingNotification = app(BookingNotification::class);
        $this->bookings = auth()->user()->ownerBookings()->orderBy('created_at', 'desc')->get();
    }
    public function confirm(BookingNotification $bookingNotification, Booking $booking)
    {
        // $this->bookingNotification = app(BookingNotification::class);

        if($booking->exists())
        {
            $confirmed = $booking->update([
                "status" => "confirmed"
            ]);
            if($confirmed)
            {
                $bookingNotification->confirmedBook($booking);
            }

        }
    }
    public function reject(Booking $booking)
    {
        if($booking->exists())
        {
            $booking->update([
                "status" => "rejected"
            ]);
        }
    }
    public function render()
    {
        return view('livewire.host.bookings');
    }
}
