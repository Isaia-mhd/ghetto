<div class="bg-white rounded-2xl shadow p-8 flex flex-col md:flex-row gap-8 items-center md:items-start">
    <img src="{{ asset('assets/logo.jpg') }}" alt="Profil"
        class="w-32 h-32 rounded-full border-4 border-primary shadow-md">
    <div class="flex-1">
        <h2 class="text-2xl font-bold text-myblack">{{ auth()->user()->name }}</h2>
        <p class="text-gray-600 text-xs mb-4">Membre depuis mars 2024</p>
            <div class="grid sm:grid-cols-2 gap-4 text-sm">
                <div>
                    <p class="text-gray-500">Email</p>
                    <p class="font-medium text-gray-800">{{ auth()->user()->email }}</p>
                </div>
                <div>
                    <p class="text-gray-500">Téléphone</p>
                    <p class="font-medium text-gray-800">+{{ auth()->user()->phone }}</p>
                </div>
                <div>
                    <p class="text-gray-500">Adresse</p>
                    <p class="font-medium text-gray-800">{{ auth()->user()->address }}</p>
                </div>
            </div>
            <button wire:click='edit'  class="mt-6 bg-secondary px-5 py-1 cursor-pointer rounded-2xl text-sm text-mywhite">
                    @if ($isToSave)
                        Anunler
                        @else
                        Modifier
                    @endif
            </button>
    </div>
</div>
<div class="mt-6">
    @if ($isToSave)
        @include("components.auth.user_update_form")
    @endif
</div>
