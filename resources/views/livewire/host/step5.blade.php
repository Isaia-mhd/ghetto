
{{-- Step number --}}
<div class="">
    <h1 class="text-md font-bold text-gray-800 mb-6 flex items-center gap-2">
        <i class="fa-solid fa-plus text-blue-600"></i>
        Plus de details
    </h1>
</div>

{{-- Guest --}}
<div>
    <label for="guest" class="block text-gray-700 text-xs font-medium mb-1">Nombre de personne</label>
    <input type="number" wire:model='guest' id="guest"
        class="w-full text-xs border-gray-300 shadow-sm rounded-md px-3 outline-none py-2 focus:ring focus:ring-blue-200"
        placeholder="Ex : 200">
    @error('guest')
        <p class="text-red-500 text-sm">{{ $message }}</p>
    @enderror
</div>
<div>
    <div class="w-full flex justify-between">
        <label for="isOffered" class="block text-gray-700 text-xs font-medium mb-1">Offre</label>
        @if ($isOffered)
            <i class="fa-solid fa-toggle-on text-2xl cursor-pointer" wire:click='setIsOffered' id="isOffered"></i>
        @else
            <i class="fa-solid fa-toggle-off text-2xl cursor-pointer" wire:click='setIsOffered' id="isOffered"></i>
        @endif
    </div>

    @error('isOffered')
        <p class="text-red-500 text-sm">{{ $message }}</p>
    @enderror
</div>
{{-- price offered --}}
@if ($isOffered)
    <div>
        <label for="offeredPrice" class="block text-gray-700 text-xs font-medium mb-1">Prix d'offre</label>
        <input type="number" wire:model='offeredPrice' id="offeredPrice"
            class="w-full text-xs border-gray-300 shadow-sm rounded-md px-3 outline-none py-2 focus:ring focus:ring-blue-200"
            placeholder="Ex : 200">
        @error('offeredPrice')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>
@endif

{{-- coverImage  --}}
<div>
    <label for="coverImage" class="block text-gray-700 text-xs font-medium mb-1">Image de couverture</label>
    <input type="file" wire:model='coverImage' id="coverImage"
        class="w-full text-xs border-gray-300 shadow-sm rounded-md px-3 outline-none py-2 focus:ring focus:ring-blue-200">
    @error('coverImage')
        <p class="text-red-500 text-sm">{{ $message }}</p>
    @enderror
</div>

{{-- Images --}}
<div>
    <label for="images" class="block text-gray-700 text-xs font-medium mb-1">Images</label>
    <input type="file" wire:model='images' id="images"
        class="w-full text-xs border-gray-300 shadow-sm rounded-md px-3 outline-none py-2 focus:ring focus:ring-blue-200" multiple>
    @error('images')
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
