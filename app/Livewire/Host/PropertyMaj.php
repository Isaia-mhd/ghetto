<?php

namespace App\Livewire\Host;

use App\Models\Category;
use App\Models\Property;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class PropertyMaj extends Component
{
    use WithFileUploads;
    public $equipments = [];
    public $newEquipment = '';
    public $property;
    public $name;
    public $description;
    public $address;
    public $pricePerNight;
    public $pricePerDay;
    public $pricePerMonth;
    public $kitchen;
    public $parking;
    public $isAvailable;
    public $active;
    public $bed;
    public $room;

    public $bath;
    public $bathExtern;
    public $bathIntern;
    public $toilet = false;
    public $toiletIntern;
    public $toiletExtern;
    public $coverImage;
    public $oldCoverImage;
    public $isOffered;
    public $discount;
    public $guest;
    public $hotelId;
    public $latitude = null;
    public $longitude = null;
    public $newImages = [];
    public $oldImages;

    protected $rules = [
        'name' => 'required',
        'address' => 'required',
        'description' => 'required',
        'room' => 'required',
        'guest' => 'required',
    ];
    protected $messages = [
        "name.required" => "Le champ nom est obligatoire",
    ];

    public function mount(Property $property)
    {
        $this->property = $property;
        $this->name = $property->name;
        $this->description = $property->description;
        $this->address = $property->address;
        $this->pricePerNight = $property->pricePerNight;
        $this->pricePerDay = $property->pricePerDay;
        $this->pricePerMonth = $property->pricePerMonth;
        $this->pricePerYear = $property->pricePerYear;
        $this->room = $property->room;
        $this->bed = $property->bed;
        $this->bath = $property->bath;
        $this->kitchen = $property->kitchen;
        $this->parking = $property->parking;
        $this->guest = $property->guest;
        $this->oldCoverImage = $property->coverImage;
        $this->oldImages = $property->images;
        $this->isOffered = $property->isOffered;
        $this->isAvailable = $property->isAvailable;
        $this->active = $property->active;
        $this->discount = $property->discount;
        $this->bathIntern = $property->bathIntern;
        $this->bathExtern = $property->bathExtern;
        $this->toiletIntern = $property->toiletIntern;
        $this->toiletExtern = $property->toiletExtern;
        $this->toilet = $property->toilet;
        $this->hotelId = $property->hotel_id;

    }

    public function addEquipment()
    {
        if($this->newEquipment !== '') {
            $this->equipments[] = $this->newEquipment;
            $this->newEquipment = '';
        }
    }

    public function removeEquipment($index)
    {
        unset($this->equipments[$index]);
        $this->equipments = array_values($this->equipments);
    }

    public function update()
    {
        $this->validate();

        if ($this->coverImage) {
            Storage::disk('public')->delete($this->property->coverImage);
            $path = $this->coverImage->store('uploads/property', 'public');
            $this->property->update([
                'coverImage' => $path
            ]);
        }

        $images = [];
        if ($this->newImages) {
            foreach (json_decode($this->oldImages) as $oldImage) {
                Storage::disk('public')->delete($oldImage);
            }
            foreach ($this->newImages as $image) {
                $images[] = $image->store('uploads/property', 'public');
            }
        }

        if ($this->newImages) {
             $this->property->update([
                'images' => json_encode($images, JSON_OBJECT_AS_ARRAY)
            ]);
        }

        $this->property->update([
            'name' => $this->name,
            'address' => $this->address,
            'description' => $this->description,
            'room' => $this->room,
            'guest' => $this->guest,
            'bed' => $this->bed,
            'parking' => $this->parking,
            'equipments' => json_encode($this->equipments),
            'pricePerNight' => $this->pricePerNight,
            'pricePerDay' => $this->pricePerDay,
            'pricePerMonth' => $this->pricePerMonth,
            'bath' => $this->bath,
            'bathIntern' => $this->bath ? $this->bathIntern : null,
            'bathExtern' => $this->bath ? $this->bathExtern : null,
            'toilet' => $this->toilet,
            'toiletIntern' => $this->toilet ? $this->toiletIntern : null,
            'toiletExtern' => $this->toilet ? $this->toiletExtern : null,
            'kitchen' => $this->kitchen,
            'isOffered' => $this->isOffered,
            'discount' => $this->discount,
            'location' => json_encode([
                'lat' => $this->latitude,
                'long' => $this->longitude,
            ]),
        ]);

        session()->flash("success", "Propriété modifiée avec succès");
        return redirect()->route('dashboard.properties');
    }
    public function render()
    {
        return view('livewire.host.property-maj');
    }
}
