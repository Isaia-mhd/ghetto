<div class="fixed inset-0 flex items-center justify-center z-50">
    <!-- Fond semi-transparent -->
    <div class="absolute inset-0 bg-myblack/50 bg-opacity-50" wire:click="closeModalDelete"></div>

    <!-- Contenu de la modal -->
    <div class="bg-white rounded-xl shadow-lg p-6 w-96 z-10">
        <h2 class="text-lg font-semibold text-gray-800 mb-4">Confirmation</h2>
        <p class="text-gray-600 mb-6">Êtes-vous sûr de vouloir supprimer cette propriété ?</p>

        <div class="flex justify-end gap-4">
            <button wire:click="closeModalDelete"
                class="px-4 py-2 bg-gray-200 rounded-md hover:bg-gray-300 text-xs transition cursor-pointer">
                Annuler
            </button>

            <button wire:click="destroy({{ $property->id }})"
                class="px-4 py-2 bg-red-600 text-mywhite text-xs rounded-md cursor-pointer hover:bg-red-700 transition">
                Supprimer
            </button>
        </div>
    </div>
</div>
