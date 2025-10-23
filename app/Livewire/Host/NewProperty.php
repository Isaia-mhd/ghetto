<?php

namespace App\Livewire\Host;

use App\Models\Category;
use App\Models\Hotel;
use App\Models\Property;
use Livewire\Component;
use Livewire\WithFileUploads;

class NewProperty extends Component
{
    use WithFileUploads;

    public $equipments = [];
    public $newEquipment = '';
    public $isRoomCategory = false;
    public $roomId;
    public $step = 1;
    public $progress = 25;
    public $name;
    public $address;
    public $categoryId;
    public $description;
    public $room;
    public $bed;
    public $bath = false;
    public $bathIntern;
    public $bathExtern;
    public $toilet = false;
    public $toiletIntern;
    public $toiletExtern;

    public $parking = false;
    public $kitchen = false;

    public $pricePerNight;
    public $pricePerDay;
    public $pricePerMonth;
    public $guest;
    public $isOffered = false;
    public $discount = null;
    public $latitude = null;
    public $longitude = null;

    public $images;
    public $coverImage;
    public $categories;
    public $hotels;
    public $hotelId;
    protected $rules = [
        'name' => 'required',
        'address' => 'required',
        'description' => 'required',
        'room' => 'required',
        'guest' => 'required',
        'coverImage' => 'required',
        'images.*' => 'required|max:2048',
    ];
    protected $messages = [
        "name.required" => "Le champ nom est obligatoire",
    ];

    public function next()
    {
        $this->step++;
        $this->progress += 25;
    }
    public function back()
    {
        $this->step--;
        $this->progress -= 25;
    }
    public function setBath()
    {
        $this->bath = !$this->bath;
    }
    public function setToilet()
    {
        $this->toilet = !$this->toilet;
    }
    public function setParking()
    {
        $this->parking = !$this->parking;
    }
    public function setKitchen()
    {
        $this->kitchen = !$this->kitchen;
    }
    public function setIsOffered()
    {
        $this->isOffered = !$this->isOffered;
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

    public function updated()
    {
        $this->validate();
    }

    public function updatedCategoryId($value)
    {
        $this->isRoomCategory = $value == $this->roomId;

        if (!$this->isRoomCategory) {
            $this->hotelId = null;
        }
    }
    public function mount()
    {
        $this->categories = Category::all();
        $this->roomId = Category::where('name', 'room')->first()->id;
        $this->hotels = Hotel::where('owner_id', auth()->id())->get();
    }
    public function save()
    {
        $validated = $this->validate();

        if ($this->coverImage) {
            $validated['coverImage'] = $this->coverImage->store('uploads/property', 'public');
        }
        $validated['images'] = [];

        if ($this->images) {
            foreach ($this->images as $image) {
                $validated['images'][] = $image->store('uploads/property', 'public');
            }
        }
        $validated['images'] = json_encode($validated['images'], JSON_OBJECT_AS_ARRAY);
        Property::create([
            ...$validated,
            'owner_id' => auth()->id(),
            'category_id' => $this->categoryId,
            'hotel_id' => $this->hotelId,
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

        dd("Ok");
        // return redirect()->route('dashboard')->with('success', 'Nouvel apartement cré');
    }
    public function render()
    {
        return view('livewire.host.new-property');
    }
}
