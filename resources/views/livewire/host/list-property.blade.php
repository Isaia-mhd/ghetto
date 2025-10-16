<div>
    {{-- Do your work, then step back. --}}
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-xl font-bold text-gray-800 flex items-center gap-2">
            <i class="fa-solid fa-house text-blue-600"></i>
            Toutes mes propriétés
        </h1>
    </div>

    <div class="min-h-screen bg-mywhite p-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($properties as $property)
                @livewire('property-card', ['property' => $property])
            @endforeach
        </div>
    </div>
</div>
