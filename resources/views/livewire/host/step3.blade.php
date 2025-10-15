{{-- Step number --}}
<div class="">
    <h1 class="text-md font-bold text-gray-800 mb-6 flex items-center gap-2">
        <i class="fa-solid fa-plus text-blue-600"></i>
        Équipements offerts
    </h1>
</div>

<div>
    <div class="w-full flex justify-between">
        <label for="parking" class="block text-gray-700 text-xs font-medium mb-1"><i class="fa-solid fa-car"></i> Parking</label>
        @if ($parking)
            <i class="fa-solid fa-toggle-on text-2xl cursor-pointer" wire:click='setParking' id="parking"></i>
        @else
            <i class="fa-solid fa-toggle-off text-2xl cursor-pointer" wire:click='setParking' id="parking"></i>
        @endif
    </div>

    @error('parking')
        <p class="text-red-500 text-xs">{{ $message }}</p>
    @enderror
</div>


<div>
    <div class="w-full flex justify-between">
        <label for="kitchen" class="block text-gray-700 text-xs font-medium mb-1"><i class="fa-solid fa-kitchen-set"></i> Cuisine</label>
        @if ($kitchen)
            <i class="fa-solid fa-toggle-on text-2xl cursor-pointer" wire:click='setKitchen' id="kitchen"></i>
        @else
            <i class="fa-solid fa-toggle-off text-2xl cursor-pointer" wire:click='setKitchen' id="kitchen"></i>
        @endif
    </div>

    @error('kitchen')
        <p class="text-red-500 text-xs">{{ $message }}</p>
    @enderror
</div>


<div>
    <label for="newEquipment" class="block text-gray-700 text-xs font-medium py-1">Ajouter un équipement</label>
    <input wire:model.defer="newEquipment" id="newEquipment" wire:keydown.enter="addEquipment"
        class="w-full text-xs border-gray-300 shadow-sm rounded-md px-3 outline-none py-2 focus:ring focus:ring-blue-200"
        placeholder="Ex : Wi-Fi">
    {{-- <button type="button" wire:click="addEquipment" class="bg-blue-500 text-xs py-2 text-white px-4 rounded">Ajouter</button> --}}
</div>

<ul class=" flex gap-1">
    @foreach($equipments as $index => $equipment)
        <li class="flex justify-between items-center gap-2 mb-1 text-xs py-1 bg-green-200 rounded-sm px-2">
            {{ $equipment }}
            <button type="button" wire:click="removeEquipment({{ $index }})" class="text-red-800 cursor-pointer">✖</button>
        </li>
    @endforeach
</ul>


{{-- Next button --}}
<div class="pt-4 flex justify-end gap-4">
    <button wire:click='back'
        class="flex items-center text-xs cursor-pointer gap-2 bg-secondary text-white px-5 py-2 rounded-lg font-medium shadow">
        <i class="fa-solid fa-arrow-left"></i>
        Retour
    </button>
    <button wire:click='next'
        class="flex items-center text-xs cursor-pointer gap-2 bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg font-medium shadow">
        <i class="fa-solid fa-check"></i>
        Suivant
    </button>
</div>
