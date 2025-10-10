{{-- Step number --}}
<div class="">
    <h1 class="text-md font-bold text-gray-800 mb-6 flex items-center gap-2">
        <i class="fa-solid fa-plus text-blue-600"></i>
        Équipements offerts
    </h1>
</div>

<div>
    <div class="w-full flex justify-between">
        <label for="wifi" class="block text-gray-700 text-xs font-medium mb-1">Wi-fi</label>
        @if ($wifi)
            <i class="fa-solid fa-toggle-on text-2xl cursor-pointer" wire:click='setWifi' id="wifi"></i>
        @else
            <i class="fa-solid fa-toggle-off text-2xl cursor-pointer" wire:click='setWifi' id="wifi"></i>
        @endif
    </div>

    @error('wifi')
        <p class="text-red-500 text-sm">{{ $message }}</p>
    @enderror
</div>

<div>
    <div class="w-full flex justify-between">
        <label for="kitchen" class="block text-gray-700 text-xs font-medium mb-1">Kitchen</label>
        @if ($kitchen)
            <i class="fa-solid fa-toggle-on text-2xl cursor-pointer" wire:click='setKitchen' id="kitchen"></i>
        @else
            <i class="fa-solid fa-toggle-off text-2xl cursor-pointer" wire:click='setKitchen' id="kitchen"></i>
        @endif
    </div>

    @error('kitchen')
        <p class="text-red-500 text-sm">{{ $message }}</p>
    @enderror
</div>
<div>
    <div class="w-full flex justify-between">
        <label for="tv" class="block text-gray-700 text-xs font-medium mb-1">TV</label>
        @if ($tv)
            <i class="fa-solid fa-toggle-on text-2xl cursor-pointer" wire:click='setTv' id="tv"></i>
        @else
            <i class="fa-solid fa-toggle-off text-2xl cursor-pointer" wire:click='setTv' id="tv"></i>
        @endif
    </div>

    @error('tv')
        <p class="text-red-500 text-sm">{{ $message }}</p>
    @enderror
</div>
<div>
    <div class="w-full flex justify-between">
        <label for="airConditioner" class="block text-gray-700 text-xs font-medium mb-1">Air Conditioner</label>
        @if ($airConditioner)
            <i class="fa-solid fa-toggle-on text-2xl cursor-pointer" wire:click='setAirConditioner' id="airConditioner"></i>
        @else
            <i class="fa-solid fa-toggle-off text-2xl cursor-pointer" wire:click='setAirConditioner' id="airConditioner"></i>
        @endif
    </div>

    @error('airConditioner')
        <p class="text-red-500 text-sm">{{ $message }}</p>
    @enderror
</div>
<div>
    <div class="w-full flex justify-between">
        <label for="washingMachine" class="block text-gray-700 text-xs font-medium mb-1">Washing Machine</label>
        @if ($washingMachine)
            <i class="fa-solid fa-toggle-on text-2xl cursor-pointer" wire:click='setWashingMachine' id="washingMachine"></i>
        @else
            <i class="fa-solid fa-toggle-off text-2xl cursor-pointer" wire:click='setWashingMachine' id="washingMachine"></i>
        @endif
    </div>

    @error('washingMachine')
        <p class="text-red-500 text-sm">{{ $message }}</p>
    @enderror
</div>

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
