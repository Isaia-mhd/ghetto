{{-- Step number --}}
<div class="">
    <h1 class="text-md font-bold text-gray-800 mb-6 flex items-center gap-2">
        <i class="fa-solid fa-plus text-blue-600"></i>
        Informations générales
    </h1>
</div>

{{-- Category --}}
<div>
    <label for="category" class="block text-gray-700 text-xs font-medium mb-1">Categorie</label>
    <select wire:model='categoryId' id="category"  class="w-full text-xs border-gray-300 shadow-sm rounded-md px-3 outline-none py-2 focus:ring focus:ring-blue-200">
        <option value="">Choisir la categorie</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ Str::title($category->name) }}</option>
        @endforeach
    </select>
    @error('categoryId')
        <p class="text-red-500 text-xs">{{ $message }}</p>
    @enderror
</div>

{{-- Hotel list --}}
@if ($isRoomCategory)
    <div>
    <label for="hotel" class="block text-gray-700 text-xs font-medium mb-1">Hotel</label>
    <select wire:model='hotelId' id="hotel"  class="w-full text-xs border-gray-300 shadow-sm rounded-md px-3 outline-none py-2 focus:ring focus:ring-blue-200">
        <option value="">Choisir l'hotel</option>
        @foreach ($hotels as $hotel)
            <option value="{{ $hotel->id }}">{{ Str::title($hotel->name) }}</option>
        @endforeach
    </select>
    @error('hotelId')
        <p class="text-red-500 text-xs">{{ $message }}</p>
    @enderror
    </div>
@endif

{{-- Name --}}
<div>
    <label for="name" class="block text-gray-700 text-xs font-medium mb-1">Nom</label>
    <input type="text" wire:model="name" id="name"
        class="w-full text-xs border-gray-300 shadow-sm rounded-md px-3 outline-none py-2 focus:ring focus:ring-blue-200"
        placeholder="Ex : Charmant studio en centre-ville">
    @error('name')
        <p class="text-red-500 text-xs">{{ $message }}</p>
    @enderror
</div>

{{-- Title --}}
<div>
    <label for="address" class="block text-gray-700 text-xs font-medium mb-1">Adresse</label>
    <input type="text" wire:model="address" id="address"
        class="w-full text-xs border-gray-300 shadow-sm rounded-md px-3 outline-none py-2 focus:ring focus:ring-blue-200"
        placeholder="Ex : Ambalavola Mahajanga">
    @error('address')
        <p class="text-red-500 text-xs">{{ $message }}</p>
    @enderror
</div>

{{-- Description --}}
<div>
    <label for="description" class="block text-gray-700 text-xs font-medium mb-1">Description</label>
    <textarea wire:model="description" id="description" rows="4"
        class="w-full text-xs border-gray-300 shadow-sm rounded-md px-3 outline-none py-2 focus:ring focus:ring-blue-200"
        placeholder="Décrivez votre logement..."></textarea>
    @error('description')
        <p class="text-red-500 text-xs">{{ $message }}</p>
    @enderror
</div>

{{-- Next button --}}
<div class="pt-4 flex justify-end">
    <button wire:click='next'
        class="flex items-center text-xs cursor-pointer gap-2 bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg font-medium shadow">
        <i class="fa-solid fa-check"></i>
        Suivant
    </button>
</div>
