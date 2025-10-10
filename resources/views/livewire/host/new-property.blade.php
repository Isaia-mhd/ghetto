<div class="w-full mx-auto">
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-xl font-bold text-gray-800 flex items-center gap-2">
            <i class="fa-solid fa-house text-blue-600"></i>
            Nouvel Appartement
        </h1>
    </div>
    <div class=" bg-white shadow-md p-8">

        {{-- Form --}}
        <div class="w-[50%] space-y-5">
            @include("livewire.host.step$step")
        </div>
    </div>
</div>
