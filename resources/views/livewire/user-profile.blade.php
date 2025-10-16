<div class="min-h-screen bg-gray-100 flex">
    {{-- Aside bar --}}
    <aside class="w-64 bg-white shadow-xl flex flex-col justify-between">
        <div class="p-6">
            <div class="flex items-center gap-2 mb-8">
                <img src="{{ asset('assets/logo.jpg') }}" class="w-10 h-10 rounded-full" alt="Logo">
                <h1 class="text-xl font-bold text-primary">Ghetto</h1>
            </div>

            <nav class="space-y-2 text-sm">
                <a href="{{ route("profile") }}" wire:navigate
                    class="w-full cursor-pointer flex items-center gap-3 text-gray-700 hover:bg-indigo-50 p-2 rounded-md">
                    <i class="fa-solid fa-user text-indigo-600"></i>
                    <span>Mon Profil</span>
                </a>
                <a href="{{ route("profile.favorites") }}" wire:navigate
                    class="w-full cursor-pointer flex items-center gap-3 text-gray-700 hover:bg-indigo-50 p-2 rounded-md">
                    <i class="fa-solid fa-heart text-red-500"></i>
                    <span>Favoris</span>
                </a>
                <a href="{{ route("profile.books") }}" wire:navigate
                    class="w-full cursor-pointer flex items-center gap-3 text-gray-700 hover:bg-indigo-50 p-2 rounded-md">
                    <i class="fa-solid fa-calendar-check text-green-600"></i>
                    <span>Mes Réservations</span>
                </a>
                <a href="{{ route("dashboard") }}" wire:navigate
                    class="w-full cursor-pointer flex items-center gap-3 text-gray-700 hover:bg-indigo-50 p-2 rounded-md">
                    <i class="fa-solid fa-house text-blue-600"></i>
                    <span>Espace hôte</span>
                </a>
                <a href="{{ route("profile") }}" wire:navigate
                    class="w-full cursor-pointer flex items-center gap-3 text-gray-700 hover:bg-indigo-50 p-2 rounded-md">
                    <i class="fa-solid fa-gear text-myblack"></i>
                    <span>Parametres</span>
                </a>
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
                @include("components.auth.modal_logout")
            @endif
            {{-- User profil --}}
            @if (Route::is("profile"))
                @include("components.auth.profile")
            @endif

            {{-- Favorites --}}
            @if (Route::is("profile.favorites"))
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
            @if (Route::is("profile.books"))
                @livewire('booking')
            @endif
        </div>
    </main>
</div>
