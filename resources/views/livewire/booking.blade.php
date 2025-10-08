<div class="w-full max-w-[90%] mx-auto my-6">
    {{-- Stop trying to control. --}}
    <h1 class="text-2xl">Votre Réservations</h1>
    <div class="mt-6">
        <div class="flex justify-start items-center gap-8 border-b-1 border-gray-300">
            <button
                class="text-sm font-semibold cursor-pointer py-2 {{ $upComingActive ? 'border-b-3 border-gray-500' : '' }}"
                wire:click="showTab('upcoming')">
                Récents
            </button>
            <button
                class="text-sm font-semibold cursor-pointer py-2 {{ $pastActive ? 'border-b-3 border-gray-500' : '' }}"
                wire:click="showTab('past')">
                Passé
            </button>

        </div>

        @if ($upComingActive)
            <div class="rounded-2xl px-4 shadow-md shadow-gray-200 flex justify-between items-center gap-1 mt-6">
                <div class="py-2 flex justify-start items-center gap-1 ">
                    <img src="{{ asset('assets/house1.jpg') }}" alt="image"
                        class="w-15 h-15 hidden md:block rounded-2xl ">
                    <div class="space-y-1">
                        <h3 class="text-xs font-semibold ">Fully Furnished Apartment</h3>
                        <div class="flex flex-col lg:flex-row justify-between lg:gap-8 text-xs ">
                            <p><span class="font-bold">Entrée:</span> 12 mars 2021</p>
                            <p><span class="font-bold">Duration:</span> Long ( 2 - 5 ans )</p>
                            <p><span class="font-bold">Personne:</span> 4</p>
                        </div>
                        <p class="text-xs font-bold">$1200 USD </p>
                    </div>
                </div>
                {{-- Cancel buuton --}}
                <button class="text-xs text-mywhite bg-secondary rounded-full py-2 px-4 cursor-pointer">Annuler</button>
            </div>
            <div class="rounded-2xl px-4 shadow-md shadow-gray-200 flex justify-between items-center gap-1 mt-6">
                <div class="py-2 flex justify-start items-center gap-1 ">
                    <img src="{{ asset('assets/house1.jpg') }}" alt="image"
                        class="w-15 h-15 hidden md:block rounded-2xl ">
                    <div class="space-y-1">
                        <h3 class="text-xs font-semibold ">Fully Furnished Apartment</h3>
                        <div class="flex flex-col lg:flex-row justify-between lg:gap-8 text-xs ">
                            <p><span class="font-bold">Entrée:</span> 12 mars 2021</p>
                            <p><span class="font-bold">Duration:</span> Long ( 2 - 5 ans )</p>
                            <p><span class="font-bold">Personne:</span> 4</p>
                        </div>
                        <p class="text-xs font-bold">$1200 USD </p>
                    </div>
                </div>
                {{-- Cancel buuton --}}
                <button class="text-xs text-mywhite bg-secondary rounded-full py-2 px-4 cursor-pointer">Annuler</button>
            </div>
            <div class="rounded-2xl px-4 shadow-md shadow-gray-200 flex justify-between items-center gap-1 mt-6">
                <div class="py-2 flex justify-start items-center gap-1 ">
                    <img src="{{ asset('assets/house1.jpg') }}" alt="image"
                        class="w-15 h-15 hidden md:block rounded-2xl ">
                    <div class="space-y-1">
                        <h3 class="text-xs font-semibold ">Fully Furnished Apartment</h3>
                        <div class="flex flex-col lg:flex-row justify-between lg:gap-8 text-xs ">
                            <p><span class="font-bold">Entrée:</span> 12 mars 2021</p>
                            <p><span class="font-bold">Duration:</span> Long ( 2 - 5 ans )</p>
                            <p><span class="font-bold">Personne:</span> 4</p>
                        </div>
                        <p class="text-xs font-bold">$1200 USD </p>
                    </div>
                </div>
                {{-- Cancel buuton --}}
                <button class="text-xs text-mywhite bg-secondary rounded-full py-2 px-4 cursor-pointer">Annuler</button>
            </div>
        @else
            <div class="rounded-2xl px-4 shadow-md shadow-gray-200 flex justify-between items-center gap-1 mt-6">
                <div class="py-2 flex justify-start items-center gap-1 ">
                    <img src="{{ asset('assets/house1.jpg') }}" alt="image"
                        class="w-15 h-15 hidden md:block rounded-2xl ">
                    <div class="space-y-1">
                        <h3 class="text-xs font-semibold ">Fully Furnished Apartment</h3>
                        <div class="flex flex-col lg:flex-row justify-between lg:gap-8 text-xs ">
                            <p><span class="font-bold">Entrée:</span> 12 mars 2021</p>
                            <p><span class="font-bold">Duration:</span> Long ( 2 - 5 ans )</p>
                            <p><span class="font-bold">Personne:</span> 4</p>
                        </div>
                        <p class="text-xs font-bold">$1200 USD </p>
                    </div>
                </div>
                {{-- Cancel buuton --}}
                <button class="text-xs text-mywhite bg-secondary rounded-full py-2 px-4 cursor-pointer">Annuler</button>
            </div>
            <div class="rounded-2xl px-4 shadow-md shadow-gray-200 flex justify-between items-center gap-1 mt-6">
                <div class="py-2 flex justify-start items-center gap-1 ">
                    <img src="{{ asset('assets/house1.jpg') }}" alt="image"
                        class="w-15 h-15 hidden md:block rounded-2xl ">
                    <div class="space-y-1">
                        <h3 class="text-xs font-semibold ">Fully Furnished Apartment</h3>
                        <div class="flex flex-col lg:flex-row justify-between lg:gap-8 text-xs ">
                            <p><span class="font-bold">Entrée:</span> 12 mars 2021</p>
                            <p><span class="font-bold">Duration:</span> Long ( 2 - 5 ans )</p>
                            <p><span class="font-bold">Personne:</span> 4</p>
                        </div>
                        <p class="text-xs font-bold">$1200 USD </p>
                    </div>
                </div>
                {{-- Cancel buuton --}}
                <button class="text-xs text-mywhite bg-secondary rounded-full py-2 px-4 cursor-pointer">Annuler</button>
            </div>
        @endif
    </div>
</div>
