<div x-data="{ open: false }" class="relative">

    <!-- Logout button -->
    <button
        @click="open = true"
        class="w-full cursor-pointer flex items-center gap-3 text-gray-700 hover:bg-indigo-50 p-2 rounded-md">
        <i class="fa-solid fa-arrow-right-from-bracket text-red-500"></i>
        <span>Déconnexion</span>
    </button>

    <!-- Modal -->
    <div
        x-show="open"
        x-transition
        class="fixed inset-0 flex items-center justify-center bg-black/50 bg-opacity-50 z-50">

        <div
            @click.outside="open = false"
            class="bg-white rounded-xl shadow-lg p-6 w-96">

            <h2 class="text-lg font-semibold text-gray-800 mb-4">Confirmation</h2>
            <p class="text-gray-600 mb-6">Êtes-vous sûr de vouloir vous déconnecter ?</p>

            <div class="flex justify-end gap-3">
                <button
                    @click="open = false"
                    class="text-xs cursor-pointer px-4 py-2 bg-gray-200 rounded-md hover:bg-gray-300">
                    Annuler
                </button>

                <button
                    wire:click="logout"
                    class="text-xs cursor-pointer px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700">
                    Se déconnecter
                </button>
            </div>
        </div>
    </div>
</div>
