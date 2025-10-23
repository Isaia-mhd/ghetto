<?php

namespace App\Services\Tarification;

use App\Models\Property;
use App\Services\Tarification\Night;
use App\Services\Tarification\Day;
use Carbon\Carbon;

class TotalPriceService
{
    protected $night;
    protected $day;
    protected $month;


    public function __construct(Night $night, Day $day, Month $month )
    {
        $this->night = $night;
        $this->day = $day;
        $this->month = $month;
    }
    public function totalPrice($property, $method, $check_in, $check_out )
    {
        switch ($method) {
            case 'night':
                return $this->night->totalPrice($property, $check_in, $check_out);

            case 'day':
                return $this->day->totalPrice($property, $check_in, $check_out);

            case 'month':
                return $this->month->totalPrice($property, $check_in, $check_out);

            default:
                // By default is Month
                return $this->month->totalPrice($property, $check_in, $check_out);
        }
    }
}
