<nav class="space-y-2 text-sm">
    <a href="{{ route('dashboard') }}" wire:navigate
        class="w-full cursor-pointer flex items-center gap-3 text-gray-700 hover:bg-indigo-50 p-2 rounded-md {{ Route::is('dashboard') ? 'bg-indigo-50':'' }} {{ Route::is('dashboard') ? 'bg-indigo-50':'' }}">
        <i class="fa-solid fa-user text-indigo-600"></i>
        <span>Dashboard</span>
    </a>

    <a href="{{ route('dashboard.notifications') }}" wire:navigate
        class="w-full cursor-pointer flex items-center gap-3 text-gray-700 hover:bg-indigo-50 p-2 rounded-md {{ Route::is('dashboard.notifications') ? 'bg-indigo-50':'' }}">
        <i class="fa-solid fa-bell text-green-600"></i>
        <span>Notifications</span>
    </a>
    <a href="{{ route('dashboard.hotels') }}" wire:navigate
        class="w-full cursor-pointer flex items-center gap-3 text-gray-700 hover:bg-indigo-50 p-2 rounded-md {{ Route::is('dashboard.hotels') ? 'bg-indigo-50':'' }}">
        <i class="fa-solid fa-hotel text-pink-600"></i>
        <span>Gerer l'hotel</span>
    </a>
    <a href="{{ route('profile') }}" wire:navigate
        class="w-full cursor-pointer flex items-center gap-3 text-gray-700 hover:bg-indigo-50 p-2 rounded-md">
        <i class="fa-solid fa-gear text-myblack"></i>
        <span>Parametres</span>
    </a>
    <a href="{{ route('dashboard.terms') }}" wire:navigate
        class="w-full cursor-pointer flex items-center gap-3 text-gray-700 hover:bg-indigo-50 p-2 rounded-md {{ Route::is('dashboard.terms') ? 'bg-indigo-50':'' }}">
        <i class="fa-solid fa-scale-balanced text-slate-900"></i>
        <span>Conditions génerale</span>
    </a>
    <a href="{{ route('dashboard') }}" wire:navigate
        class="w-full cursor-pointer flex items-center gap-3 text-gray-700 hover:bg-indigo-50 p-2 rounded-md">
        <i class="fa-solid fa-circle-info text-blue-500"></i>
        <span>Aide</span>
    </a>
    <button wire:click="openModal"
        class="w-full cursor-pointer flex items-center gap-3 text-gray-700 hover:bg-indigo-50 p-2 rounded-md">
        <i class="fa-solid fa-arrow-right-from-bracket text-red-500"></i>
        <span>Déconnexion</span>
    </button>
</nav>
