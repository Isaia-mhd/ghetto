<div class="w-full max-w-[90%] mx-auto py-6">
    @include("components.success")
    @include('components.image_gallery')

    <div class="w-full flex flex-col lg:flex-row gap-8">
        <div class="w-full">
            <div class="w-full flex justify-between items-center mb-6">
                <div>
                    <h1 class="text-2xl font-bold">{{ $property->name }}</h1>
                    <span class="text-sm text-gray-600">{{ $property->address }}</span>
                </div>
                <div class="flex items-center gap-4 text-xl text-gray-500">
                    @auth
                        @if ($favorite)
                            <i class="fa-solid fa-heart text-red-500 cursor-pointer transition-colors" wire:click='favor'></i>
                        @else
                            <i class="fa-regular fa-heart hover:text-red-500 cursor-pointer transition-colors" wire:click='favor'></i>
                        @endif
                        @endauth
                        <i class="fa-solid fa-share-nodes hover:text-blue-500 cursor-pointer transition-colors"></i>
                </div>
            </div>

            {{-- Mini Details --}}
            <div class="w-full flex flex-wrap gap-4 mt-6 p-4 bg-gray-100 rounded-xl">
                <div class="flex items-center gap-2">
                    <i class="fa-solid fa-users text-2xl text-secondary"></i>
                    <p class="text-xs font-medium">{{ $property->guest }} personnes</p>
                </div>
                <div class="flex items-center gap-2">
                    <i class="fa-solid fa-bed text-2xl text-secondary"></i>
                    <p class="text-xs font-medium">{{ $property->room }} chambre{{ $property->room > 1 ? 's' : '' }}</p>
                </div>
                @if($property->bed)
                <div class="flex items-center gap-2">
                    <i class="fa-solid fa-bed-pulse text-2xl text-secondary"></i>
                    <p class="text-xs font-medium">{{ $property->bed }} lit{{ $property->bed > 1 ? 's' : '' }}</p>
                </div>
                @endif
                @if($property->bathIntern || $property->bathExtern)
                <div class="flex items-center gap-2">
                    <i class="fa-solid fa-bath text-2xl text-secondary"></i>
                    <p class="text-xs font-medium">
                        {{ ($property->bathIntern ?? 0) + ($property->bathExtern ?? 0) }} salle{{ (($property->bathIntern ?? 0) + ($property->bathExtern ?? 0)) > 1 ? 's' : '' }} de bain
                    </p>
                </div>
                @endif
                @if($property->toiletIntern || $property->toiletExtern)
                <div class="flex items-center gap-2">
                    <i class="fa-solid fa-toilet text-2xl text-secondary"></i>
                    <p class="text-xs font-medium">
                        {{ ($property->toiletIntern ?? 0) + ($property->toiletExtern ?? 0) }} toilette{{ (($property->toiletIntern ?? 0) + ($property->toiletExtern ?? 0)) > 1 ? 's' : '' }}
                    </p>
                </div>
                @endif
            </div>


            {{-- Description --}}
            <div class="w-full my-6">
                <h2 class="text-md font-semibold mb-2">Description de la propriété</h2>
                <p class="text-gray-700 text-xs leading-relaxed">{{ $property->description }}</p>
            </div>


            {{-- EQUIPMENTS --}}
            @include("components.equipments_details")

        </div>

        {{-- Booking Card and Price details --}}
        @include("components.bookBtn_and_price_card")
    </div>

    {{-- MAP --}}
    @if($property->location)
        <div class="w-full mt-6">
            <h2 class="text-md font-semibold mb-2">Emplacement</h2>
            @include('components.map')
        </div>
    @endif

    {{-- Hote info --}}
    <div class="my-6">
        <h2 class="text-md font-semibold mb-4">Rencontrez votre hôte</h2>
        <div class="flex items-center gap-4 p-4 border border-gray-50 rounded-lg bg-white shadow-md">
            <img src="{{ asset('assets/logo.jpg') }}" alt="Profile de l'hôte" class="w-16 h-16 rounded-full object-cover border-2 border-blue-600">
            <div>
                <h3 class="text-xl font-bold text-gray-900">{{ $property->owner->name ?? 'Hôte inconnu' }}</h3>
                <p class="text-sm text-gray-500">Propriétaire | Membre depuis {{ $property->owner->created_at->format('d M Y') ?? '' }}</p>
            </div>
            <a href="" class="ml-auto text-secondary text-xs cursor-pointer hover:bg-secondary hover:text-mywhite font-medium border border-secondary px-4 py-2 rounded-full transition duration-300">
                Contacter l'hôte
            </a>
        </div>
    </div>

    {{-- REVIEWS --}}
    @include("components.review")

    @if($showModal)
        @include("components.modal_booking")
    @endif
</div>
