<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="w-full mx-auto">
        <h3 class="text-2xl font-bold text-myblack mb-6 flex items-center gap-2">
            <i class="fa-solid fa-calendar-check text-green-600"></i>
            Vos Réservations
        </h3>
        @include("components.success")

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
        <div class="mt-6 space-y-5" wire:poll>
            @if ($upComingActive)
                @foreach ($myActualBookings as $myActualBooking)
                    <div
                        class="rounded-2xl px-5 py-4 bg-mywhite shadow-md border border-gray-100 flex justify-between items-center gap-3 hover:shadow-lg transition-all duration-300">

                        <div class="flex items-center gap-4">
                            <img src="{{ asset('storage/' . $myActualBooking->property->coverImage) }}" alt="property_name"
                                class="w-20 h-20 rounded-2xl object-cover shadow-sm hidden md:block">

                            <div class="space-y-2">
                                <div class="">
                                    <h3 class="text-base font-semibold text-myblack">{{ $myActualBooking->property->name }}</h3>
                                    <p class="text-xs text-myblack">{{ $myActualBooking->property->address }}</p>
                                </div>
                                <div class="flex flex-col lg:flex-row lg:items-center text-sm text-accent gap-2 lg:gap-6">
                                    <p><span class="font-semibold text-primary">Entrée : </span>{{ Carbon\Carbon::parse($myActualBooking->check_in)->format('d M Y') }}</p>
                                    <p><span class="font-semibold text-primary">Sortie : </span>{{ $myActualBooking->isNoEnd ? 'Non précisé' : \Carbon\Carbon::parse($myActualBooking->check_out)->format('d M Y') }}</p>

                                    <p><span class="font-semibold text-primary">Personnes : </span>{{ $myActualBooking->guest }}</p>
                                </div>

                                <p class="text-sm text-secondary">{{ $myActualBooking->total_price }}</p>

                                <p class="text-xs font-semibold
                                    {{ $myActualBooking->status === 'confirmed' ? 'text-green-500' :
                                    ($myActualBooking->status === 'cancelled' || $myActualBooking->status === 'rejected' ? 'text-red-500' : 'text-amber-400') }}">
                                    {{ Str::title($myActualBooking->status) }}
                                </p>


                            </div>
                        </div>

                        @if ($upComingActive && $myActualBooking->status === "pending")
                            <button
                                class="text-xs font-semibold text-mywhite bg-secondary hover:bg-accent rounded-full py-2 px-5 shadow transition">
                                Annuler
                            </button>
                        @else
                            <button
                                class="text-xs font-semibold text-gray-600 bg-gray-100 rounded-full py-2 px-5 cursor-not-allowed">
                                Terminé
                            </button>
                        @endif
                    </div>
                @endforeach
                @if (count($myActualBookings) <= 0)
                    <div class="p-4 bg-gray-100 rounded-md">
                        <p class="text-gray-700 text-sm md:text-base">
                            Vous n'avez pas encore de réservation en cours.
                        </p>
                    </div>
                @endif
            @else
                @foreach ($myPastBookings as $myPastBooking)
                    <div
                        class="rounded-2xl px-5 py-4 bg-mywhite shadow-md border border-gray-100 flex justify-between items-center gap-3 hover:shadow-lg transition-all duration-300">

                        <div class="flex items-center gap-4">
                            <img src="{{ asset('storage/' . $myPastBooking->property->coverImage) }}" alt="property_name"
                                class="w-20 h-20 rounded-2xl object-cover shadow-sm hidden md:block">

                            <div class="space-y-2">
                                <div class="">
                                    <h3 class="text-base font-semibold text-myblack">{{ $myPastBooking->property->name }}</h3>
                                    <p class="text-xs text-myblack">{{ $myPastBooking->property->address }}</p>
                                </div>
                                <div class="flex flex-col lg:flex-row lg:items-center text-sm text-accent gap-2 lg:gap-6">
                                    <p><span class="font-semibold text-primary">Entrée : </span>{{ Carbon\Carbon::parse($myPastBooking->check_in)->format('d M Y') }}</p>
                                    <p><span class="font-semibold text-primary">Sortie : </span>{{ $myPastBooking->isNoEnd ? 'Non précisé' : \Carbon\Carbon::parse($myPastBooking->check_out)->format('d M Y') }}</p>

                                    <p><span class="font-semibold text-primary">Personnes : </span>{{ $myPastBooking->guest }}</p>
                                </div>

                                <p class="text-sm text-secondary">{{ $myPastBooking->total_price }}</p>

                                <p class="text-xs font-semibold
                                    {{ $myPastBooking->status === 'confirmed' ? 'text-green-500' :
                                    ($myPastBooking->status === 'cancelled' || $myActualBooking->status === 'rejected' ? 'text-red-500' : 'text-amber-400') }}">
                                    {{ Str::title($myPastBooking->status) }}
                                </p>


                            </div>
                        </div>

                        @if ($upComingActive)
                            <button
                                class="text-xs font-semibold text-mywhite bg-secondary hover:bg-accent rounded-full py-2 px-5 shadow transition">
                                Annuler
                            </button>
                        @else
                            <button
                                class="text-xs font-semibold text-gray-600 bg-gray-100 rounded-full py-2 px-5 cursor-not-allowed">
                                Terminé
                            </button>
                        @endif
                    </div>
                @endforeach
                @if (count($myPastBookings) <= 0)
                    <div class="p-4 bg-gray-100 rounded-md">
                        <p class="text-gray-700 text-sm md:text-base">
                            Vous n'avez pas encore de réservation passée.
                        </p>
                    </div>
                @endif
            @endif
        </div>
    </div>

</div>
