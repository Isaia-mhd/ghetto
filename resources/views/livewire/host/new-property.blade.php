<div class="w-full mx-auto" wire:poll>
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-xl font-bold text-gray-800 flex items-center gap-2">
            <i class="fa-solid fa-house text-blue-600"></i>
            Nouvel Appartement
        </h1>
    </div>
    <div class="w-full ">
        <div class="w-[{{ $progress }}%] bg-green-200 py-0.5 flex justify-end items-center">
            <div class="absolute w-5 h-5 rounded-full text-xs text-mywhite bg-green-400 flex items-center justify-center">{{ $step }}</div>
        </div>
    </div>
    <div class=" bg-white shadow-md p-8">
        {{-- Form --}}
        <div class="w-[100%] space-y-5">
            @include("livewire.host.step$step")
        </div>
    </div>
</div>
