<div class="min-h-screen bg-gray-100 flex">
    {{-- Aside bar --}}
    <aside class="w-64 bg-white shadow-xl flex flex-col justify-between">
        <div class="p-6">
            <div class="flex items-center gap-2 mb-8">
                <img src="{{ asset('assets/logo.jpg') }}" class="w-10 h-10 rounded-full" alt="Logo">
                <h1 class="text-xl font-bold text-primary">Ghetto</h1>
            </div>

            @include('livewire.host.nav')
        </div>
    </aside>

    {{-- Main content --}}
    <main class="flex-1 p-8 overflow-y-auto">
        {{-- Deconnexion Modal --}}
        @if ($showModal)
            @include('components.auth.modal_logout')
        @endif
        <div class="max-w-6xl mx-auto">

            @if (Route::is('dashboard'))
                <div class="flex justify-between items-center mb-8">
                    <h1 class="text-xl font-bold text-gray-800 flex items-center gap-2">
                        <i class="fa-solid fa-house text-blue-600"></i>
                        Espace Hôte
                    </h1>

                    <a href="{{ route('dashboard.house.new') }}" wire:navigate
                        class="flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-mywhite text-xs cursor-pointer px-4 py-2 rounded-lg shadow">
                        <i class="fa-solid fa-plus"></i>
                        Nouvelle annonce
                    </a>
                </div>
                <div class="min-h-screen bg-mywhite p-6">
                    {{-- Cards section --}}
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        {{-- Houses --}}
                        <div
                            class="bg-white rounded-2xl p-6 shadow-sm border border-gray-200 hover:shadow-md transition">
                            <div class="flex items-center justify-between mb-2">
                                <h2 class="text-lg font-semibold text-gray-700">Mes annonces</h2>
                                <i class="fa-solid fa-building text-blue-500 text-xl"></i>
                            </div>
                            <p class="text-gray-500 text-sm">Gérez vos propriétés, disponibilités et tarifs.</p>
                            <a href="#"
                                class="inline-block mt-4 text-blue-600 hover:underline text-sm font-medium">
                                Voir toutes mes annonces →
                            </a>
                        </div>

                        {{-- Booking --}}
                        <div
                            class="bg-white rounded-2xl p-6 shadow-sm border border-gray-200 hover:shadow-md transition">
                            <div class="flex items-center justify-between mb-2">
                                <h2 class="text-lg font-semibold text-gray-700">Réservations</h2>
                                <i class="fa-solid fa-calendar-check text-green-500 text-xl"></i>
                            </div>
                            <p class="text-gray-500 text-sm">Suivez les réservations en attente ou confirmées.</p>
                            <a href="#"
                                class="inline-block mt-4 text-green-600 hover:underline text-sm font-medium">
                                Gérer les réservations →
                            </a>
                        </div>

                        {{-- Reviews --}}
                        <div
                            class="bg-white rounded-2xl p-6 shadow-sm border border-gray-200 hover:shadow-md transition">
                            <div class="flex items-center justify-between mb-2">
                                <h2 class="text-lg font-semibold text-gray-700">Avis voyageurs</h2>
                                <i class="fa-solid fa-star text-yellow-500 text-xl"></i>
                            </div>
                            <p class="text-gray-500 text-sm">Consultez les retours de vos voyageurs.</p>
                            <a href="#"
                                class="inline-block mt-4 text-yellow-600 hover:underline text-sm font-medium">
                                Voir les avis →
                            </a>
                        </div>
                    </div>

                    {{-- Stats section --}}
                    <div class="mt-10 bg-white rounded-2xl p-6 shadow-sm border border-gray-200">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Statistiques rapides</h2>
                        <div class="grid sm:grid-cols-3 gap-6 text-center">
                            <div>
                                <p class="text-2xl font-bold text-blue-600">12</p>
                                <p class="text-gray-500 text-sm">Annonces actives</p>
                            </div>
                            <div>
                                <p class="text-2xl font-bold text-green-600">28</p>
                                <p class="text-gray-500 text-sm">Réservations ce mois</p>
                            </div>
                            <div>
                                <p class="text-2xl font-bold text-yellow-500">4.8 ★</p>
                                <p class="text-gray-500 text-sm">Note moyenne</p>
                            </div>
                        </div>
                    </div>
                </div>
            @elseif(Route::is('dashboard.house.new'))
                @livewire('host.new-property')
            @endif
        </div>
    </main>
</div>
