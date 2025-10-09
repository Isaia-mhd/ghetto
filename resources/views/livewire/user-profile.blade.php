<div class="min-h-screen bg-gray-100 flex">

    {{-- Aside bar --}}
    <aside class="w-64 bg-white shadow-xl flex flex-col justify-between">
        <div class="p-6">
            <div class="flex items-center gap-2 mb-8">
                <img src="{{ asset('assets/logo.jpg') }}" class="w-10 h-10 rounded-full" alt="Logo">
                <h1 class="text-xl font-bold text-primary">Ghetto</h1>
            </div>

            <nav class="space-y-2 text-sm">
                <button wire:click="showTab('profile')"
                    class="w-full cursor-pointer flex items-center gap-3 text-gray-700 hover:bg-indigo-50 p-2 rounded-md">
                    <i class="fa-solid fa-user text-indigo-600"></i>
                    <span>Mon Profil</span>
                </button>
                <button wire:click="showTab('favorites')"
                    class="w-full cursor-pointer flex items-center gap-3 text-gray-700 hover:bg-indigo-50 p-2 rounded-md">
                    <i class="fa-solid fa-heart text-red-500"></i>
                    <span>Favoris</span>
                </button>
                <button wire:navigate wire:click="showTab('booking')"
                    class="w-full cursor-pointer flex items-center gap-3 text-gray-700 hover:bg-indigo-50 p-2 rounded-md">
                    <i class="fa-solid fa-calendar-check text-green-600"></i>
                    <span>Mes Réservations</span>
                </button>
                <button
                    class="w-full cursor-pointer flex items-center gap-3 text-gray-700 hover:bg-indigo-50 p-2 rounded-md">
                    <i class="fa-solid fa-gear text-myblack"></i>
                    <span>Parametres</span>
                </button>
                <button wire:click="openModal"
                    class="w-full cursor-pointer flex items-center gap-3 text-gray-700 hover:bg-indigo-50 p-2 rounded-md">
                    <i class="fa-solid fa-arrow-right-from-bracket text-red-500"></i>
                    <span>Déconnexion</span>
                </button>
            </nav>
        </div>
    </aside>

    {{-- Main content --}}
    <main class="flex-1 p-8 overflow-y-auto">
        <div class="max-w-6xl mx-auto">

            {{-- Deconnexion Modal --}}
            @if ($showModal)
                <div class="fixed inset-0 flex items-center justify-center z-50">
                    <!-- Fond semi-transparent -->
                    <div class="absolute inset-0 bg-black bg-opacity-50" wire:click="closeModal"></div>

                    <!-- Contenu de la modal -->
                    <div class="bg-white rounded-xl shadow-lg p-6 w-96 z-10">
                        <h2 class="text-lg font-semibold text-gray-800 mb-4">Confirmation</h2>
                        <p class="text-gray-600 mb-6">Êtes-vous sûr de vouloir vous déconnecter ?</p>

                        <div class="flex justify-end gap-4">
                            <button wire:click="closeModal"
                                class="px-4 py-2 bg-gray-200 rounded-md hover:bg-gray-300 transition">
                                Annuler
                            </button>

                            <button wire:click="logout"
                                class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 transition">
                                Se déconnecter
                            </button>
                        </div>
                    </div>
                </div>
            @endif
            {{-- User profil --}}
            @if ($isProfile)
                @include('components.auth.profile')
            @endif

            {{-- Favorites --}}
            @if ($isFavorites)
                <div class="w-full">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                        <i class="fa-solid fa-heart text-red-500"></i> Maisons favorites
                    </h3>

                    <div class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                        @for ($i = 0; $i < 5; $i++)
                            @include('components.property_card')
                        @endfor
                    </div>
                </div>
            @endif

            {{-- Booking --}}
            @if ($isBooking)
                @livewire('booking')
            @endif
        </div>
    </main>

</div>
