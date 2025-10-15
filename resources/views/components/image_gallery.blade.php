<div class="w-full my-6">

    <div class="relative w-full max-w-[100%] mx-auto">
        <!-- Bouton gauche -->
        <button id="scrollLeft"
                class="absolute left-0 top-1/2 -translate-y-1/2 bg-white shadow-md rounded-full p-2 hover:bg-gray-100 z-10 cursor-pointer">
            ◀
        </button>

        <!-- Container scrollable -->
        <div id="gallery" class="flex gap-3 overflow-x-auto scroll-smooth scrollbar-hide">
            @foreach ($property->images as $image)
                <img src="{{ asset('storage/'. $image) }}" alt="image"
                    class="w-64 h-48 object-cover rounded-md cursor-pointer hover:scale-105 transition duration-500">
            @endforeach
        </div>

        <!-- Bouton droit -->
        <button id="scrollRight"
                class="absolute right-0 top-1/2 -translate-y-1/2 bg-white shadow-md rounded-full p-2 hover:bg-gray-100 z-10 cursor-pointer">
            ▶
        </button>
    </div>
</div>
@include('components.script_gallery')
