<?php

namespace App\Services\Tarification;

use App\Contracts\TarificationMethodContract;
use Carbon\Carbon;

class Day implements TarificationMethodContract
{
    public function totalPrice($property, $checkIn, $checkOut):int
    {
        $price = $property->pricePerDay;

        if(!empty($checkOut))
        {
            $dayTotal = Carbon::parse($checkIn)->diffInDays($checkOut);
            return $dayTotal * $price;
        } else {
            return $price;
        }
    }
}
