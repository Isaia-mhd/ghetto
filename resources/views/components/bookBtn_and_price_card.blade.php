<div class="w-full md:w-1/3 h-min sticky top-24">
    <div class="shadow-lg shadow-gray-200 rounded-2xl py-6 px-6 border border-gray-100">
        <div class="{{ $property->isOffered ? '' : 'flex' }} justify-between items-baseline mb-4">
            <h2 class="text-sm font-bold text-secondary">
                {{ $property->isOffered ? '' : $property->pricePerNight ?? ($property->pricePerDay ?? '') }}</h2>
            @if ($property->isOffered)
                <span class="text-sm text-green-600 font-light"> Ceci est une offre spéciale !</span>
            @else
                <span class="text-sm text-gray-500">Ariary / nuit</span>
            @endif
        </div>

        @if ($property->discount)
            <div class="bg-yellow-100 text-yellow-800 p-2 rounded-lg text-sm mb-4 font-light">
                <i class="fa-solid fa-tags mr-2"></i>
                {{ $property->discount }}% de réduction !
            </div>
        @endif

        <hr class="my-4 text-gray-300">

        <div class="flex flex-col my-3 text-sm space-y-2 text-gray-700">
            @if ($property->pricePerNight)

                <span>Par nuit:
                    <span class="font-semibold">
                        @if ($property->isOffered)
                            <strike class="pr-2 text-xs text-red-800">
                                {{ number_format($property->pricePerNight, 2, ',', ' ') }} Ar
                            </strike>
                            <span
                                class="text-green-600">{{ number_format($property->pricePerNight - ($property->pricePerNight * $property->discount) / 100, 2, ',', ' ') }}
                                Ar</span>
                        @else
                            {{ number_format($property->pricePerNight, 2, ',', ' ') }} Ar
                        @endif
                    </span>
                </span>
            @endif
            @if ($property->pricePerDay)
                <span>Par jour:
                    <span class="font-semibold">
                        @if ($property->isOffered)
                            <strike class="pr-2 text-xs text-red-800">
                                {{ number_format($property->pricePerDay, 2, ',', ' ') }} Ar
                            </strike>
                            <span
                                class="text-green-600">{{ number_format($property->pricePerDay - ($property->pricePerDay * $property->discount) / 100, 2, ',', ' ') }}
                                Ar</span>
                        @else
                            {{ number_format($property->pricePerDay, 2, ',', ' ') }} Ar
                        @endif
                    </span>
                </span>
            @endif
            @if ($property->pricePerMonth)
                <span>Par mois:
                    <span class="font-semibold">
                        @if ($property->isOffered)
                            <strike class="pr-2 text-xs text-red-800">
                                {{ number_format($property->pricePerMonth, 2, ',', ' ') }} Ar
                            </strike>
                            <span
                                class="text-green-600">{{ number_format($property->pricePerMonth - ($property->pricePerMonth * $property->discount) / 100, 2, ',', ' ') }}
                                Ar</span>
                        @else
                            {{ number_format($property->pricePerMonth, 2, ',', ' ') }} Ar
                        @endif
                    </span>
                </span>
            @endif
            @if ($property->pricePerYear)
                <span>Par an:
                    <span class="font-semibold">
                        @if ($property->isOffered)
                            <strike class="pr-2 text-xs text-red-800">
                                {{ number_format($property->pricePerYear, 2, ',', ' ') }} Ar
                            </strike>
                            <span
                                class="text-green-600">{{ number_format($property->pricePerYear - ($property->pricePerYear * $property->discount) / 100, 2, ',', ' ') }}
                                Ar</span>
                        @else
                            {{ number_format($property->pricePerYear, 2, ',', ' ') }} Ar
                        @endif
                    </span>
            @endif
        </div>

        <div class="w-full mt-6 space-y-4">
            <livewire:booking :property="$property"/>
        </div>
    </div>
</div>
