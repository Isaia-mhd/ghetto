<?php

namespace App\Contracts;

interface TarificationMethodContract
{
    public function totalPrice($property, $checkIn, $checkOut);
}
