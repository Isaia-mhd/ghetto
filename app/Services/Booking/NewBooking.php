<?php

namespace App\Services\Booking;

use App\Notifications\NewBook;

class NewBooking
{
    public function notification($book)
    {
        $owner = $book->property->owner;
        $owner->notify(new NewBook($book));
    }
}
