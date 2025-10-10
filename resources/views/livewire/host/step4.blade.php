{{-- Step number --}}
<div class="">
    <h1 class="text-md font-bold text-gray-800 mb-6 flex items-center gap-2">
        <i class="fa-solid fa-plus text-blue-600"></i>
        Etape {{ $step }}
    </h1>
</div>

{{-- priceNight --}}
<div>
    <label for="pricePerNight" class="block text-gray-700 text-xs font-medium mb-1">Prix / nuit (€)</label>
    <input type="number" wire:model='pricePerNight' id="pricePerNight"
        class="w-full text-xs border-gray-300 shadow-sm rounded-md px-3 outline-none py-2 focus:ring focus:ring-blue-200"
        placeholder="Ex : 200">
    @error('pricePerNight')
        <p class="text-red-500 text-sm">{{ $message }}</p>
    @enderror
</div>

{{-- priceDay --}}
<div>
    <label for="pricePerDay" class="block text-gray-700 text-xs font-medium mb-1">Prix / jour (€)</label>
    <input type="number" wire:model='pricePerDay' id="pricePerDay"
        class="w-full text-xs border-gray-300 shadow-sm rounded-md px-3 outline-none py-2 focus:ring focus:ring-blue-200"
        placeholder="Ex : 200">
    @error('pricePerDay')
        <p class="text-red-500 text-sm">{{ $message }}</p>
    @enderror
</div>

{{-- priceMonth --}}
<div>
    <label for="pricePerMonth" class="block text-gray-700 text-xs font-medium mb-1">Prix / mois (€)</label>
    <input type="number" wire:model='pricePerMonth' id="pricePerMonth"
        class="w-full text-xs border-gray-300 shadow-sm rounded-md px-3 outline-none py-2 focus:ring focus:ring-blue-200"
        placeholder="Ex : 200">
    @error('pricePerMonth')
        <p class="text-red-500 text-sm">{{ $message }}</p>
    @enderror
</div>

{{-- priceYear --}}
<div>
    <label for="pricePerYear" class="block text-gray-700 text-xs font-medium mb-1">Prix / an (€)</label>
    <input type="number" wire:model='pricePerYear' id="pricePerYear"
        class="w-full text-xs border-gray-300 shadow-sm rounded-md px-3 outline-none py-2 focus:ring focus:ring-blue-200"
        placeholder="Ex : 200">
    @error('pricePerYear')
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
