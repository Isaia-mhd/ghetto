{{-- Step number --}}
<div class="">
    <h1 class="text-md font-bold text-gray-800 mb-6 flex items-center gap-2">
        <i class="fa-solid fa-plus text-blue-600"></i>
        Équipements disponibles
    </h1>
</div>

{{-- Room --}}
<div>
    <label for="room" class="block text-gray-700 text-xs font-medium mb-1">Nombre de chambre</label>
    <input type="number" wire:model='room' id="room"
        class="w-full text-xs border-gray-300 shadow-sm rounded-md px-3 outline-none py-2 focus:ring focus:ring-blue-200"
        placeholder="Ex : 4">
    @error('room')
        <p class="text-red-500 text-xs">{{ $message }}</p>
    @enderror
</div>

{{-- Bed --}}
@if ($isRoomCategory)
    <div>
    <label for="bed" class="block text-gray-700 text-xs font-medium mb-1">Nombre de lit</label>
    <input type="number" wire:model='bed' id="bed"
        class="w-full text-xs border-gray-300 shadow-sm rounded-md px-3 outline-none py-2 focus:ring focus:ring-blue-200"
        placeholder="Ex : 4">
    @error('bed')
        <p class="text-red-500 text-xs">{{ $message }}</p>
    @enderror
</div>
@endif

{{-- Bath --}}
<div>
    <div class="w-full flex justify-between">
        <label for="bath" class="block text-gray-700 text-xs font-medium mb-1">Douche</label>
        @if ($bath)
            <i class="fa-solid fa-toggle-on text-2xl cursor-pointer" wire:click='setBath' id="bath"></i>
        @else
            <i class="fa-solid fa-toggle-off text-2xl cursor-pointer" wire:click='setBath' id="bath"></i>
        @endif
    </div>

    @error('bath')
        <p class="text-red-500 text-xs">{{ $message }}</p>
    @enderror
</div>
@if ($bath)
    {{-- Bath --}}
    <div>
        <label for="bathIntern" class="block text-gray-700 text-xs font-medium mb-1">Douche interne</label>
        <input type="number" wire:model="bathIntern" id="bathIntern"
            class="w-full text-xs border-gray-300 shadow-sm rounded-md px-3 outline-none py-2 focus:ring focus:ring-blue-200"
            placeholder="Ex : 1">
        @error('bathIntern')
            <p class="text-red-500 text-xs">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="bathExtern" class="block text-gray-700 text-xs font-medium mb-1">Douche externe</label>
        <input type="number" wire:model="bathExtern" id="bathExtern"
            class="w-full text-xs border-gray-300 shadow-sm rounded-md px-3 outline-none py-2 focus:ring focus:ring-blue-200"
            placeholder="Ex : 1">
        @error('bathExtern')
            <p class="text-red-500 text-xs">{{ $message }}</p>
        @enderror
    </div>
@endif


{{-- Toilet --}}
<div>
    <div class="w-full flex justify-between">
        <label for="toilet" class="block text-gray-700 text-xs font-medium mb-1">WC</label>
        @if ($toilet)
            <i class="fa-solid fa-toggle-on text-2xl cursor-pointer" wire:click='setToilet' id="toilet"></i>
        @else
            <i class="fa-solid fa-toggle-off text-2xl cursor-pointer" wire:click='setToilet' id="toilet"></i>
        @endif
    </div>

    @error('toilet')
        <p class="text-red-500 text-xs">{{ $message }}</p>
    @enderror
</div>
@if ($toilet)
    {{-- Bath --}}
    <div>
        <label for="toiletIntern" class="block text-gray-700 text-xs font-medium mb-1">WC interne</label>
        <input type="number" wire:model="toiletIntern" id="toiletIntern"
            class="w-full text-xs border-gray-300 shadow-sm rounded-md px-3 outline-none py-2 focus:ring focus:ring-blue-200"
            placeholder="Ex : 1">
        @error('toiletIntern')
            <p class="text-red-500 text-xs">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="toiletExtern" class="block text-gray-700 text-xs font-medium mb-1">WC externe</label>
        <input type="number" wire:model="toiletExtern" id="toiletExtern"
            class="w-full text-xs border-gray-300 shadow-sm rounded-md px-3 outline-none py-2 focus:ring focus:ring-blue-200"
            placeholder="Ex : 1">
        @error('toiletExtern')
            <p class="text-red-500 text-xs">{{ $message }}</p>
        @enderror
    </div>
@endif





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
