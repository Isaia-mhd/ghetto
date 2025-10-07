<div class="w-full max-w-[90%] mx-auto pt-6 pb-6">
    <h2 class="text-lg font-semibold text-myblack">Logements près de chez vous</h2>
    <div class="mt-6 w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 justify-items-center gap-6">
        @for ($i = 0; $i < 4; $i++)
            @include('components.property_card')
        @endfor
    </div>
</div>
