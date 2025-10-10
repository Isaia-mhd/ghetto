{{-- Step number --}}
<div class="">
    <h1 class="text-md font-bold text-gray-800 mb-6 flex items-center gap-2">
        <i class="fa-solid fa-plus text-blue-600"></i>
        Etape {{ $step }}
    </h1>
</div>

{{-- Room --}}
<div>
    <label for="room" class="block text-gray-700 text-xs font-medium mb-1">Room</label>
    <input type="number" wire:model='room' id="room"
        class="w-full text-xs border-gray-300 shadow-sm rounded-md px-3 outline-none py-2 focus:ring focus:ring-blue-200"
        placeholder="Ex : 4">
    @error('room')
        <p class="text-red-500 text-sm">{{ $message }}</p>
    @enderror
</div>

{{-- Bed --}}
<div>
    <label for="bed" class="block text-gray-700 text-xs font-medium mb-1">Bed</label>
    <input type="number" wire:model="bed" id="bed"
        class="w-full text-xs border-gray-300 shadow-sm rounded-md px-3 outline-none py-2 focus:ring focus:ring-blue-200"
        placeholder="Ex : 3">
    @error('bed')
        <p class="text-red-500 text-sm">{{ $message }}</p>
    @enderror
</div>

{{-- Bath --}}
<div>
    <label for="bath" class="block text-gray-700 text-xs font-medium mb-1">Bath</label>
    <input type="number" wire:model="bath" id="bath"
        class="w-full text-xs border-gray-300 shadow-sm rounded-md px-3 outline-none py-2 focus:ring focus:ring-blue-200"
        placeholder="Ex : 1">
    @error('bath')
        <p class="text-red-500 text-sm">{{ $message }}</p>
    @enderror
</div>

<div>
    <div class="w-full flex justify-between">
        <label for="parking" class="block text-gray-700 text-xs font-medium mb-1">Parking</label>
        @if ($parking)
            <i class="fa-solid fa-toggle-on text-2xl cursor-pointer" wire:click='setParking' id="parking"></i>
        @else
            <i class="fa-solid fa-toggle-off text-2xl cursor-pointer" wire:click='setParking' id="parking"></i>
        @endif
    </div>

    @error('bath')
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
