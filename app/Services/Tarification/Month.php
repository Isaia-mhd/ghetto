<?php

namespace App\Services\Tarification;

use App\Contracts\TarificationMethodContract;
use Carbon\Carbon;
use Exception;

class Month implements TarificationMethodContract
{
    public function totalPrice($property, $checkIn, $checkOut)
    {
        $price = $property->pricePerMonth;

        if(!empty($checkOut))
        {
            $monthTotal = Carbon::parse($checkIn)->diffInMonths($checkOut);
            $monthTotal = Carbon::parse($checkIn)->diffInMonths($checkOut);
            if($monthTotal < 1)
            {
                throw new Exception("Votre durée de logement est inférieure à un mois. Utilisez la tarification par jour ou par nuit.", 422);
            }
            return $monthTotal * $price;
        } else {
            return $price;
        }
    }
}
