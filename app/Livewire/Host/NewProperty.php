<?php

namespace App\Livewire\Host;

use Livewire\Component;

class NewProperty extends Component
{
    public $step = 1;
    public $title;
    public $category;
    public $description;
    public $room;
    public $bed;
    public $bath;
    public $parking = false;
    public $wifi;
    public $kitchen;
    public $tv;
    public $airConditioner;
    public $washingMachine;
    public $pricePerNight;
    public $pricePerDay;
    public $pricePerMonth;
    public $pricePerYear;


    public function next()
    {
        $this->step++;
    }
    public function back()
    {
        $this->step--;
    }
    public function setParking()
    {
        $this->parking = !$this->parking;
    }
    public function setWifi()
    {
        $this->wifi = !$this->wifi;
    }
    public function setKitchen()
    {
        $this->kitchen = !$this->kitchen;
    }
    public function setTv()
    {
        $this->tv = !$this->tv;
    }
    public function setAirConditioner()
    {
        $this->airConditioner = !$this->airConditioner;
    }
    public function setWashingMachine()
    {
        $this->washingMachine = !$this->washingMachine;
    }
    public function render()
    {
        return view('livewire.host.new-property');
    }
}
