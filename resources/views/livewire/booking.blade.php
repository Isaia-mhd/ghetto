<div class="w-full mx-auto mt-10">
    <h3 class="text-2xl font-bold text-myblack mb-6 flex items-center gap-2">
        <i class="fa-solid fa-calendar-check text-secondary"></i>
        Vos Réservations
    </h3>

    {{-- Tab --}}
    <div class="mt-6 border-b border-gray-300 flex justify-start items-center gap-8">
        <button
            class="relative pb-2 text-sm font-semibold cursor-pointer transition-colors duration-300
                {{ $upComingActive ? 'text-primary after:absolute after:bottom-0 after:left-0 after:w-full after:h-[3px] after:bg-primary' : 'text-gray-500 hover:text-primary' }}"
            wire:click="showTab('upcoming')">
            Récents
        </button>

        <button
            class="relative pb-2 text-sm font-semibold cursor-pointer transition-colors duration-300
                {{ $pastActive ? 'text-primary after:absolute after:bottom-0 after:left-0 after:w-full after:h-[3px] after:bg-primary' : 'text-gray-500 hover:text-primary' }}"
            wire:click="showTab('past')">
            Passé
        </button>
    </div>

    {{-- Main Content --}}
    <div class="mt-6 space-y-5">
        @foreach ([1,2,3] as $i)
            <div class="rounded-2xl px-5 py-4 bg-mywhite shadow-md border border-gray-100 flex justify-between items-center gap-3 hover:shadow-lg transition-all duration-300">

                <div class="flex items-center gap-4">
                    <img src="{{ asset('assets/house1.jpg') }}" alt="image"
                        class="w-20 h-20 rounded-2xl object-cover shadow-sm hidden md:block">

                    <div class="space-y-1">
                        <h3 class="text-base font-semibold text-myblack">Appartement entièrement meublé</h3>
                        <div class="flex flex-col lg:flex-row lg:items-center text-sm text-accent gap-2 lg:gap-6">
                            <p><span class="font-semibold text-primary">Entrée :</span> 12 mars 2021</p>
                            <p><span class="font-semibold text-primary">Durée :</span> Long (2 - 5 ans)</p>
                            <p><span class="font-semibold text-primary">Personnes :</span> 4</p>
                        </div>
                        <p class="text-sm font-bold text-secondary">$1200 USD</p>
                    </div>
                </div>

                @if ($upComingActive)
                    <button class="text-xs font-semibold text-mywhite bg-secondary hover:bg-accent rounded-full py-2 px-5 shadow transition">
                        Annuler
                    </button>
                @else
                    <button class="text-xs font-semibold text-gray-600 bg-gray-100 rounded-full py-2 px-5 cursor-not-allowed">
                        Terminé
                    </button>
                @endif
            </div>
        @endforeach
    </div>
</div>
