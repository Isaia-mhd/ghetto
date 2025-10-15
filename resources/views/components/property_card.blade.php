<div class="relative w-[250px] bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
    <img class="w-full h-48 object-cover" src="{{ asset('storage/' . $property->coverImage) }}" alt="image">

    <div class="absolute top-0 right-0 w-[120px] py-1 px-2 bg-mywhite text-xs rounded-tr-xl rounded-bl-xl">
        <p class="text-secondary">{{ $property->pricePerNight }} ar / nuit</p>
    </div>
    <div class="py-2 px-4">
        <div class="flex justify-between items-center gap-2">
            <h2 class="text-sm font-semibold text-gray-800 truncate">{{ $property->name }}</h2>
            <div class="flex justify-center items-center gap-0">
                <i class="fa-solid fa-star text-yellow-500 text-xs"></i>
                <i class="fa-solid fa-star text-yellow-500 text-xs"></i>
                <i class="fa-solid fa-star text-yellow-500 text-xs"></i>
                <i class="fa-solid fa-star text-gray-500 text-xs"></i>
                <i class="fa-solid fa-star text-gray-500 text-xs"></i>
            </div>
        </div>
        <div class="text-green-600 mt-2 text-xs flex items-center justify-start gap-2"><i
                class="fa-solid fa-location-dot"></i>
            <p>{{ $property->address }}</p>
        </div>

        <div class="mt-2 flex justify-start items-center gap-6 font-semibold">
            @if ($property->bed)
                <div class="text-black text-xs flex items-center justify-start gap-2">
                    <i class="fa-solid fa-bed"></i>
                    <p>{{ $property->bed }}</p>
                </div>
            @endif
            @if ($property->guest)
                <div class="text-black text-xs flex items-center justify-start gap-2">
                    <i class="fa-solid fa-users"></i>
                    <p>{{ $property->guest }}</p>
                </div>
            @endif
            @if ($property->parking)
                <div class="text-black text-xs flex items-center justify-start gap-2">
                    <i class="fa-solid fa-car"></i>
                </div>
            @endif
        </div>

        <a href="{{ route("property.details", $property->id) }}" wire:navigate class="text-xs text-secondary">Voir plus →</a>

    </div>
</div>

