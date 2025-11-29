<?php

namespace App\Services\Booking;

use App\Notifications\BookConfirmed;
use App\Notifications\NewBook;

class BookingNotification
{
    public function newBook($book)
    {
        $owner = $book->property->owner;
        $owner->notify(new NewBook($book));
    }

    public function confirmedBook($book)
    {
        $client = $book->user;
        $client->notify(new BookConfirmed($book));
    }
}
