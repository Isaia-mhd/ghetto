<div x-data="{ open: false }" class="relative">

    <!-- Voir plus button -->
    <button
        type="button"
        @click.prevent.stop="open = true"
        class="w-full bg-blue-600 flex items-center text-white gap-3 hover:bg-blue-500 p-2 rounded-md transition cursor-pointer">
        <i class="fa-solid fa-eye"></i>
        <span>Voir plus</span>
    </button>

    <!-- Modal -->
    <div
        x-cloak
        x-show="open"
        x-transition.opacity
        wire:ignore.self
        class="fixed inset-0 flex items-center justify-center bg-black/50 z-50 px-4">

        <div
            x-transition.scale
            {{-- @click.outside="open = false" --}}
            @keydown.escape.window="open = false"
            class="bg-white rounded-xl shadow-xl p-6 w-full max-w-md">

            <!-- Header -->
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-xl font-semibold text-gray-800">
                    Détails de la notification
                </h2>

                <button
                    type="button"
                    @click="open = false"
                    wire:click="markAsRead"
                    class="text-gray-500 hover:text-gray-700 cursor-pointer">
                    <i class="fa-solid fa-xmark text-lg"></i>
                </button>
            </div>

            <!-- Message -->
            <p class="text-gray-700 mb-4">
                {{ $notification->data['message'] }}
            </p>

            <!-- Informations -->
            <div class="space-y-2 text-sm text-gray-600">

                <p>
                    <span class="font-semibold text-gray-800">Client :</span>
                    {{ $notification->data['client_name'] }}
                </p>

                <p>
                    <span class="font-semibold text-gray-800">Propriété :</span>
                    {{ $notification->data['property_title'] }}
                </p>

                <p>
                    <span class="font-semibold text-gray-800">ID réservation :</span>
                    {{ $notification->data['book_id'] }}
                </p>

                <p>
                    <span class="font-semibold text-gray-800">Reçu le :</span>
                    {{ \Carbon\Carbon::parse($notification->data['created_at'])->format('d/m/Y H:i') }}
                </p>
            </div>

            <!-- Footer -->
            <div class="flex justify-end mt-6">
                <button
                    type="button"
                    @click="open = false"
                    wire:click="markAsRead"
                    class="px-4 py-2 bg-gray-200 rounded-md text-sm hover:bg-gray-300 cursor-pointer">
                    Fermer
                </button>
            </div>

        </div>
    </div>
</div>
