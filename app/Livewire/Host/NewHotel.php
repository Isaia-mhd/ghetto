<?php

namespace App\Livewire\Host;

use App\Models\Hotel;
use Livewire\Component;

class NewHotel extends Component
{
    public $name;
    public $city;
    public $address;
    protected $rules = [
        "name" => "required",
        "city" => "required",
        "address" => "required"
    ];
    public function save()
    {
        $this->validate();

        Hotel::create([
            "owner_id" => auth()->id(),
            "name" => $this->name,
            "city" => $this->city,
            "address" => $this->address,
            "location" => json_encode([
                "lat" =>  null,
                "long" => null
            ]),
        ]);
        return redirect()->route('dashboard');
    }
    public function render()
    {
        return view('livewire.host.new-hotel');
    }
}
