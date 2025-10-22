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

                {{-- Logout Button --}}
                <livewire:logout-button />

            </nav>
        </div>
    </aside>

    {{-- Main content --}}
    <main class="flex-1 p-8 overflow-y-auto">
        <div class="max-w-6xl mx-auto">
            {{-- Deconnexion Modal --}}
            @if ($showModalLogout)
                @include('components.auth.modal_logout')
            @endif

            {{-- User profil --}}
            @if (Route::is("profile"))
                @livewire("profile-component")
            @endif

            {{-- Favorites --}}
            @if (Route::is("profile.favorites"))
                @livewire("favorites-component")
            @endif

            {{-- Booking --}}
            @if (Route::is("profile.books"))
                @livewire("booking-component")
            @endif
        </div>
    </main>
</div>
