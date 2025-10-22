<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="w-full">
        <h3 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-2">
            <i class="fa-solid fa-heart text-red-500"></i> Maisons favorites
        </h3>

        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
            @foreach ($favorites as $favorite)
                @livewire('property-card', ['property' => $favorite])
            @endforeach
        </div>
    </div>
</div>
