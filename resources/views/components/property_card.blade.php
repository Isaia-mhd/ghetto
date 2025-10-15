<a href="{{ route("property.details",$property->id) }}" wire:navigate>
    <div class="relative w-[250px] bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
        <img class="w-full h-48 object-cover" src="{{ asset('storage/' . $property->coverImage) }}" alt="image">

        <div class="absolute top-0 right-0 w-[120px] py-1 px-2 bg-mywhite text-xs rounded-tr-xl rounded-bl-xl">
            <p class="text-secondary">{{ $property->pricePerNight }} ar / nuit</p>
        </div>
        <div class="py-2 px-4">
            <h2 class="text-sm font-semibold text-gray-800">{{ $property->name }}</h2>
            <div class="text-green-600 mt-2 text-xs flex items-center justify-start gap-2"><i
                    class="fa-solid fa-location-dot"></i>
                <p>{{ $property->address }}</p>
            </div>

            <div class="mt-2 flex justify-start items-center gap-6 font-semibold">
                <div class="text-black text-xs flex items-center justify-start gap-2"><i class="fa-solid fa-bed"></i>
                    <p>2</p>
                </div>
                <div class="text-black text-xs flex items-center justify-start gap-2"><i class="fa-solid fa-bath"></i>
                    <p>2</p>
                </div>
            </div>

        </div>
    </div>
</a>
