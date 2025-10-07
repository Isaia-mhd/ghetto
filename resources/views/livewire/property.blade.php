<div class="mt-6 mb-6 w-full max-w-[90%] mx-auto">
    <div class="w-full flex justify-between">
        {{-- Navigation --}}
        <ul class="w-full flex justify-start items-center gap-8 text-sm text-gray-600">
            <li><a href="" class="py-1 border-gray-400 hover:border-b-2">Apartements</a></li>
            <li><a href="" class="py-1 border-gray-400 hover:border-b-2">Maisons</a></li>
            <li><a href="" class="py-1 border-gray-400 hover:border-b-2">Villa</a></li>
            <li><a href="" class="py-1 border-gray-400 hover:border-b-2">Hotel</a></li>
            <li><a href="" class="py-1 border-gray-400 hover:border-b-2">Plus</a></li>
        </ul>

        <div
            class="flex items-center gap-2 rounded-full text-sm text-gray-600 border border-primary hover:border-secondary duration-700 py-1 cursor-pointer px-3">
            <i class="fa-solid fa-filter"></i>
            Filtter
        </div>
    </div>

    <!-- ✅ GRID corrigé -->
    <div class="mt-6 w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 justify-items-center gap-6">
        @for ($i = 0; $i < 8; $i++)
            @include('components.property_card')
        @endfor
    </div>
</div>
