<?php

namespace App\Services\Tarification;

use App\Contracts\TarificationMethodContract;
use Carbon\Carbon;

class Night implements TarificationMethodContract
{
    public function totalPrice($property, $checkIn, $checkOut):int
    {
        $price = $property->pricePerNight;

        if(!empty($checkOut))
        {
            $nightTotal = Carbon::parse($checkIn)->diffInDays($checkOut);
            return $nightTotal * $price;
        } else {
            return $price;
        }
    }
}
