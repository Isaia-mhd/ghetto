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
    public $pricePerYear;
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
    public $newCoverImage;
    public $isOffered;
    public $discount;
    public $guest;
    public $hotelId;
    public $latitude = null;
    public $longitude = null;
    public $images;

    protected $rules = [
        'name' => 'required',
        'address' => 'required',
        'description' => 'required',
        'room' => 'required',
        'guest' => 'required',
        'coverImage' => 'required',
        'images.*' => 'max:2048',
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
        $this->coverImage = $property->coverImage;
        $this->images = $property->images;
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
        $validated = $this->validate();

        if ($this->newCoverImage) {
            Storage::disk('public')->delete($this->property->coverImage);
            $validated['coverImage'] = $this->newCoverImage->store('uploads/property', 'public');
        }


        // $validated['images'] = [];
        // if ($this->images) {
        //     foreach ($this->property->images as $oldImage) {
        //         Storage::disk('public')->delete($oldImage);
        //     }
        //     foreach ($this->images as $image) {
        //         $validated['images'][] = $image->store('uploads/property', 'public');
        //     }
        // }
        // $validated['images'] = json_encode($validated['images'], JSON_OBJECT_AS_ARRAY);

        $this->property->update([
            ...$validated,
            'bed' => $this->bed,
            'parking' => $this->parking,
            'equipments' => json_encode($this->equipments),
            'pricePerNight' => $this->pricePerNight,
            'pricePerDay' => $this->pricePerDay,
            'pricePerMonth' => $this->pricePerMonth,
            'pricePerYear' => $this->pricePerYear,
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
