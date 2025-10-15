<div class="relative w-full h-full max-w-4xl mx-auto overflow-hidden rounded-2xl shadow-md">

    {{-- Image Actual --}}
    @if (count($images) > 0)
        <img
            src="{{ asset('storage/' . $images[$currentIndex]) }}"
            alt="image {{ $currentIndex + 1 }}"
            class="w-full h-full object-cover transition-all duration-500"
        >
    @else
        <div class="w-full h-80 flex items-center justify-center text-gray-400">
            <p>Aucune image disponible</p>
        </div>
    @endif

    {{-- Navigation Button --}}
    @if (count($images) > 1)
        <button
            wire:click="previous"
            class="absolute cursor-pointer top-1/2 left-3 transform -translate-y-1/2 bg-white/70 rounded-full p-2 hover:bg-white">
            <i class="fa-solid fa-chevron-left"></i>
        </button>

        <button
            wire:click="next"
            class="absolute cursor-pointer top-1/2 right-3 transform -translate-y-1/2 bg-white/70 rounded-full p-2 hover:bg-white">
            <i class="fa-solid fa-chevron-right"></i>
        </button>

        {{-- Indicators --}}
        <div class="absolute cursor-pointer bottom-3 left-1/2 transform -translate-x-1/2 flex gap-2">
            @foreach ($images as $index => $image)
                <div
                    wire:click="goTo({{ $index }})"
                    class="w-3 h-3 rounded-full cursor-pointer transition-colors
                    {{ $currentIndex === $index ? 'bg-secondary' : 'bg-gray-400' }}">
                </div>
            @endforeach
        </div>
    @endif
</div>

