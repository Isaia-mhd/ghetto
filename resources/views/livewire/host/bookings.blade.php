<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <h3 class="text-2xl font-bold text-myblack mb-6 flex items-center gap-2">
            <i class="fa-solid fa-calendar-check text-green-600"></i>
            Vos Réservations
    </h3>
    @include("components.success")


    {{-- Main Content --}}
        <div class="mt-6 space-y-5" wire:poll>
            @foreach ($bookings as $booking)
                <div
                    class="rounded-2xl px-5 py-4 bg-mywhite shadow-md border border-gray-100 flex justify-between items-center gap-3 hover:shadow-lg transition-all duration-300">

                    <div class="flex items-center gap-4">
                        <img src="{{ asset('storage/' . $booking->property->coverImage) }}" alt="property_name"
                            class="w-20 h-20 rounded-2xl object-cover shadow-sm hidden md:block">

                        <div class="space-y-2">
                            <div class="">
                                <h3 class="text-base font-semibold text-myblack">{{ $booking->property->name }}</h3>
                                <p class="text-xs text-myblack">{{ $booking->property->address }}</p>
                            </div>
                            <div class="flex flex-col lg:flex-row lg:items-center text-sm text-accent gap-2 lg:gap-6">
                                <p><span class="font-semibold text-primary">Entrée : </span>{{ Carbon\Carbon::parse($booking->check_in)->format('d M Y') }}</p>
                                <p><span class="font-semibold text-primary">Sortie : </span>{{ $booking->isNoEnd ? 'Non précisé' : \Carbon\Carbon::parse($booking->check_out)->format('d M Y') }}</p>

                                <p><span class="font-semibold text-primary">Personnes : </span>{{ $booking->guest }}</p>
                            </div>

                            <p class="text-sm text-secondary">{{ $booking->total_price }}</p>

                            <p class="text-xs font-semibold
                                {{ $booking->status === 'confirmed' ? 'text-green-500' :
                                ($booking->status === 'cancelled' || $booking->status === 'rejected' ? 'text-red-500' : 'text-amber-400') }}">
                                {{ Str::title($booking->status) }}
                            </p>


                        </div>
                    </div>

                    @if ($booking->status === "pending")
                        <div class="">
                            <button
                                wire:click="confirm({{ $booking->id }})"
                                class="text-xs font-semibold text-white bg-green-600 rounded-full py-2 px-5 cursor-pointer">
                                Confirmer
                            </button>
                            <button
                                wire:click="reject({{ $booking->id }})"
                                class="text-xs font-semibold text-white bg-red-600 rounded-full py-2 px-5 cursor-pointer">
                                Rejeter
                            </button>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>

        @if(count($bookings) <= 0)

            <div class="p-4 bg-gray-100 rounded-md">
                <p class="text-gray-700 text-sm md:text-base">
                    Votre appartement n'a pas encore été réservé par un client.
                </p>
            </div>


        @endif
</div>
