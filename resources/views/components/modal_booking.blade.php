<div class="fixed inset-0 flex items-center justify-center z-50 transition-opacity duration-500 animate-fadeIn">
    {{-- Fond semi-transparent --}}
    <div class="absolute inset-0 bg-myblack/50 bg-opacity-50" wire:click="closeModal"></div>

    {{-- Modal content --}}
    <div class="bg-white rounded-xl shadow-lg p-6 w-96 z-10 transform transition-transform duration-500 scale-95 animate-zoomIn">
        <h2 class="text-lg font-semibold text-gray-800 mb-4">Réserver cette maison</h2>

        <form wire:submit.prevent="" class="space-y-4">
            {{-- Person total --}}
            <div>
                <label class="block text-sm text-gray-700 mb-1">Nombre de personnes</label>
                <input type="number" wire:model="nombre_personnes"
                    class="w-full shadow-sm border border-gray-200 shadow-gray-300 rounded-md px-3 py-2 text-sm focus:ring-2 focus:ring-secondary focus:outline-none">
                @error('nombre_personnes') <p class="text-red-500 text-xs">{{ $message }}</p> @enderror
            </div>

            {{-- Check In date --}}
            <div>
                <label class="block text-sm text-gray-700 mb-1">Date d’entrée</label>
                <input type="date" wire:model="date_entree"
                    class="w-full shadow-sm border border-gray-200 shadow-gray-300 rounded-md px-3 py-2 text-sm focus:ring-2 focus:ring-secondary focus:outline-none">
                @error('date_entree') <p class="text-red-500 text-xs">{{ $message }}</p> @enderror
            </div>

            {{-- Check Out date --}}
            <div>
                <label class="block text-sm text-gray-700 mb-1">Date de sortie</label>
                <input type="date" wire:model="date_sortie"
                    class="w-full shadow-sm border border-gray-200 shadow-gray-300 rounded-md px-3 py-2 text-sm focus:ring-2 focus:ring-secondary focus:outline-none">
                @error('date_sortie') <p class="text-red-500 text-xs">{{ $message }}</p> @enderror
            </div>

            {{-- Buuton --}}
            <div class="flex justify-end gap-4 pt-3">
                <button wire:click="closeModal" type="button"
                    class="px-4 py-2 bg-gray-200 rounded-md hover:bg-gray-300 text-xs transition cursor-pointer">
                    Annuler
                </button>

                <button type="submit"
                    class="px-4 py-2 bg-green-600 text-mywhite text-xs rounded-md cursor-pointer hover:bg-green-700 transition">
                    Confirmer la réservation
                </button>
            </div>
        </form>
    </div>
</div>

