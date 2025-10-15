<div class="bg-white shadow-md p-8 w-[100%] space-y-5">

    <div class="">
        <h1 class="text-md font-bold text-gray-800 mb-6 flex items-center gap-2">
            <i class="fa-solid fa-plus text-blue-600"></i>
            Créez votre nouvel hôtel
        </h1>
    </div>

    {{-- Name --}}
    <div>
        <label for="name" class="block text-gray-700 text-xs font-medium mb-1">Nom de l'hotel</label>
        <input type="text" wire:model="name" id="name"
            class="w-full text-xs border-gray-300 shadow-sm rounded-md px-3 outline-none py-2 focus:ring focus:ring-blue-200"
            placeholder="Ex : Moujangaya">
        @error('name')
            <p class="text-red-500 text-xs">{{ $message }}</p>
        @enderror
    </div>

    {{-- City --}}
    <div>
        <label for="city" class="block text-gray-700 text-xs font-medium mb-1">Ville</label>
        <input type="text" wire:model="city" id="city"
            class="w-full text-xs border-gray-300 shadow-sm rounded-md px-3 outline-none py-2 focus:ring focus:ring-blue-200"
            placeholder="Ex : Mahajanga">
        @error('city')
            <p class="text-red-500 text-xs">{{ $message }}</p>
        @enderror
    </div>


    {{-- Address --}}
    <div>
        <label for="address" class="block text-gray-700 text-xs font-medium mb-1">Adresse</label>
        <input type="text" wire:model="address" id="address"
            class="w-full text-xs border-gray-300 shadow-sm rounded-md px-3 outline-none py-2 focus:ring focus:ring-blue-200"
            placeholder="Ex : Tsararano, Mahajanga">
        @error('address')
            <p class="text-red-500 text-xs">{{ $message }}</p>
        @enderror
    </div>

    {{-- Save button --}}
    <div class="pt-4 flex justify-end">
        <button wire:click='save'
            class="flex items-center text-xs cursor-pointer gap-2 bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg font-medium shadow">
            <i class="fa-solid fa-check"></i>
            Enregistrer
        </button>
    </div>

</div>
