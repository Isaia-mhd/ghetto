{{-- Step number --}}
<div class="">
    <h1 class="text-md font-bold text-gray-800 mb-6 flex items-center gap-2">
        <i class="fa-solid fa-plus text-blue-600"></i>
        Etape {{ $step }}
    </h1>
</div>

{{-- Title --}}
<div>
    <label class="block text-gray-700 text-xs font-medium mb-1">Titre</label>
    <input type="text" wire:model="title"
        class="w-full text-xs border-gray-300 shadow-sm rounded-md px-3 outline-none py-2 focus:ring focus:ring-blue-200"
        placeholder="Ex : Charmant studio en centre-ville">
    @error('title')
        <p class="text-red-500 text-sm">{{ $message }}</p>
    @enderror
</div>

{{-- Category --}}
<div>
    <label class="block text-gray-700 text-xs font-medium mb-1">Categorie</label>
    <select wire:model='category'  class="w-full text-xs border-gray-300 shadow-sm rounded-md px-3 outline-none py-2 focus:ring focus:ring-blue-200">
        <option value="room">Chambre</option>
        <option value="room">Chambre</option>
        <option value="room">Chambre</option>
        <option value="room">Chambre</option>
    </select>
    @error('category')
        <p class="text-red-500 text-sm">{{ $message }}</p>
    @enderror
</div>

{{-- Description --}}
<div>
    <label class="block text-gray-700 text-xs font-medium mb-1">Description</label>
    <textarea wire:model="description" rows="4"
        class="w-full text-xs border-gray-300 shadow-sm rounded-md px-3 outline-none py-2 focus:ring focus:ring-blue-200"
        placeholder="Décrivez votre logement..."></textarea>
    @error('description')
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
