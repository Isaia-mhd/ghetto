<div>
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-xl font-bold text-gray-800 flex items-center gap-2">
            <i class="fa-solid fa-hotel text-blue-600"></i>
            Modification
        </h1>
    </div>

    <div class="min-h-screen bg-mywhite p-6">

        <h1 class="text-xs font-bold text-gray-900 mb-8 border-b border-gray-300 pb-2">
            Modification de la Propriété : {{ $property->name ?? '' }}
        </h1>

        @include("components.success")

        <div>
            {{--
            ===================================================================
            SECTION 1 : General INFORMATIONS AND DETAILS
            ===================================================================
            --}}
            <div id="general-info" class="mb-8 p-6 bg-gray-50 rounded-lg border border-gray-300">
                <h2 class="text-sm font-semibold text-gray-800 mb-4">1. Infos Générales et Adresse</h2>

                {{-- Name et Category --}}
                <div class="mb-4">
                    <div>
                        <label for="name" class="block text-xs font-medium text-gray-700">Nom/Titre de l'Annonce</label>
                        <input type="text" wire:model.defer='name' id="name"
                            class="mt-1 block w-full p-2 rounded-sm bg-mywhite border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-xs">
                        @error('name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                </div>

                {{--Description --}}
                <div class="mb-4">
                    <label for="description" class="block text-xs font-medium text-gray-700">Description Détaillée</label>
                    <textarea wire:model.defer='description' id="description" rows="4"
                        class="mt-1 block w-full p-2 rounded-sm bg-mywhite border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-xs">{{ old('description', $property->description) }}</textarea>
                    @error('description') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>

                {{--Address --}}
                <div class="mb-4">
                    <label for="address" class="block text-xs font-medium text-gray-700">Adresse</label>
                    <input type="text" wire:model.defer='address' id="address"
                        class="mt-1 block w-full p-2 rounded-sm bg-mywhite border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-xs">
                    @error('address') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>
            </div>

            {{--
            ===================================================================
            SECTION 2 : CAPACITY COMPOSITION COMPOSITION (GUEST, ROOM, SANITAIRES)
            ===================================================================
            --}}
            <div id="composition" class="mb-8 p-6 bg-gray-50 rounded-lg border border-gray-300">
                <h2 class="text-sm font-semibold text-gray-800 mb-4">2. Capacité et Composition</h2>

                {{-- Guests, Rooms, Beds --}}
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mb-6">
                    <div>
                        <label for="guest" class="block text-xs font-medium text-gray-700">Max. Invités</label>
                        <input type="number" wire:model.defer='guest' id="guest"
                            class="mt-1 block w-full p-2 rounded-sm bg-mywhite border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-xs">
                        @error('guest') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label for="room" class="block text-xs font-medium text-gray-700">Chambres</label>
                        <input type="number" wire:model.defer='room' id="room"
                            class="mt-1 block w-full p-2 rounded-sm bg-mywhite border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-xs">
                        @error('room') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label for="bed" class="block text-xs font-medium text-gray-700">Lits</label>
                        <input type="number" wire:model.defer='bed' id="bed"
                            class="mt-1 block w-full p-2 rounded-sm bg-mywhite border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-xs">
                        @error('bed') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                </div>

                {{-- Sanitaires --}}
                <div>
                    <label for="toilet" class="flex items-center space-x-2 text-xs font-medium text-gray-700 cursor-pointer">
                        <input type="checkbox" wire:model.defer='toilet' id="toilet" {{ $property->toilet ? 'checked' : '' }}
                            class="h-4 w-4 text-indigo-600 border-gray-300 rounded">
                        <span>Toilet</span>
                    </label>
                </div>

                @if ($toilet)
                    <h3 class="text-xs font-medium text-gray-700 my-3">Détails des Salles de Bain et WC</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        {{-- Salles de Bain --}}
                        <div>
                            <label class="block text-xs font-medium text-gray-700">Salles de Bain (Total)</label>
                            <div class="grid grid-cols-2 gap-4 mt-1">
                                <div>
                                    <label for="bathIntern" class="block text-xs font-medium text-gray-500">Intérieures</label>
                                    <input type="number" wire:model.defer='bathIntern' id="bathIntern"
                                        class="mt-1 block w-full p-2 rounded-sm bg-mywhite border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-xs">
                                </div>
                                <div>
                                    <label for="bathExtern" class="block text-xs font-medium text-gray-500">Extérieures</label>
                                    <input type="number" wire:model.defer='bathExtern' id="bathExtern"
                                        class="mt-1 block w-full p-2 rounded-sm bg-mywhite border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-xs">
                                </div>
                            </div>
                        </div>


                        {{-- Toilettes --}}
                        <div>
                            <label class="block text-xs font-medium text-gray-700">Toilettes (Total)</label>
                            <div class="grid grid-cols-2 gap-4 mt-1">
                                <div>
                                    <label for="toiletIntern" class="block text-xs font-medium text-gray-500">Intérieures (WC)</label>
                                    <input type="number" wire:model.defer='toiletIntern' id="toiletIntern"
                                        class="mt-1 block w-full p-2 rounded-sm bg-mywhite border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-xs">
                                </div>
                                <div>
                                    <label for="toiletExtern" class="block text-xs font-medium text-gray-500">Extérieures (WC)</label>
                                    <input type="number" wire:model.defer='toiletExtern' id="toiletExtern"
                                        class="mt-1 block w-full p-2 rounded-sm bg-mywhite border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-xs">
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>

            {{--
            ===================================================================
            SECTION 3 : PRICE AND TARIFICATION
            ===================================================================
            --}}
            <div id="pricing" class="mb-8 p-6 bg-gray-50 rounded-lg border border-gray-300">
                <h2 class="text-sm font-semibold text-gray-800 mb-4">3. Tarification (Ariary) et Promotion</h2>

                {{-- Price by duration --}}
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-6 mb-6">
                    <div>
                        <label for="pricePerNight" class="block text-xs font-medium text-gray-700">Prix par Nuit</label>
                        <input type="number" step="0.01" wire:model.defer='pricePerNight' id="pricePerNight"
                            class="mt-1 block w-full p-2 rounded-sm bg-mywhite border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-xs">
                    </div>
                    <div>
                        <label for="pricePerDay" class="block text-xs font-medium text-gray-700">Prix par Jour</label>
                        <input type="number" step="0.01" wire:model.defer='pricePerDay' id="pricePerDay"
                            class="mt-1 block w-full p-2 rounded-sm bg-mywhite border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-xs">
                    </div>
                    <div>
                        <label for="pricePerMonth" class="block text-xs font-medium text-gray-700">Prix par Mois</label>
                        <input type="number" step="0.01" wire:model.defer='pricePerMonth' id="pricePerMonth"
                            class="mt-1 block w-full p-2 rounded-sm bg-mywhite border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-xs">
                    </div>
                    <div>
                        <label for="pricePerYear" class="block text-xs font-medium text-gray-700">Prix par An</label>
                        <input type="number" step="0.01" wire:model.defer='pricePerYear' id="pricePerYear"
                            class="mt-1 block w-full p-2 rounded-sm bg-mywhite border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-xs">
                    </div>
                </div>
                @error('pricePerNight') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror

                <div>
                    <label for="isOffered" class="flex items-center space-x-2 text-xs font-medium text-gray-700 cursor-pointer">
                        <input type="checkbox" wire:model.defer='isOffered' id="isOffered" {{ $isOffered ? 'checked': '' }}
                            class="h-4 w-4 text-indigo-600 border-gray-300 rounded">
                        <span>Promotion / Offre Spéciale</span>
                    </label>
                </div>
                @if ($property->isOffered)
                    {{-- Discount --}}
                    <div class="mt-3">
                        <label for="discount" class="block text-xs font-medium text-gray-700">Réduction (%)</label>
                        <input type="number" wire:model.defer='discount' id="discount"
                            class="mt-1 block w-full p-2 rounded-sm bg-mywhite border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-xs">
                        @error('discount') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                @endif
            </div>

            {{--
            ===================================================================
            SECTION 4 : EQUIPEMENTS
            ===================================================================
            --}}
            <div id="equipements" class="mb-8 p-6 bg-gray-50 rounded-lg border border-gray-300">
                <h2 class="text-sm font-semibold text-gray-800 mb-4">4. Équipements et Commodités</h2>

                {{-- Équipements binaires --}}
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-6">
                    <div>
                        <label for="parking" class="flex items-center space-x-2 text-xs font-medium text-gray-700 cursor-pointer">
                            <input type="checkbox" wire:model.defer='parking' id="parking" {{ $property->parking ? 'checked' : '' }}
                                class="h-4 w-4 text-indigo-600 border-gray-300 rounded">
                            <span>Parking Disponible</span>
                        </label>
                    </div>
                    <div>
                        <label for="kitchen" class="flex items-center space-x-2 text-xs font-medium text-gray-700 cursor-pointer">
                            <input type="checkbox" wire:model.defer='kitchen' id="kitchen" {{  $property->kitchen ? 'checked' : '' }}
                                class="h-4 w-4 text-indigo-600 border-gray-300 rounded">
                            <span>Cuisine Équipée</span>
                        </label>
                    </div>
                </div>

                {{-- Équipements détaillés (JSON) --}}
                <h3 class="text-xs font-medium text-gray-700 mb-3 border-t border-gray-300 pt-4">Autres Équipements</h3>
                <ul class=" flex gap-1 my-6">
                    @foreach(json_decode($property->equipments) as $index => $equipment)
                        <li class="flex justify-between font-semibold items-center gap-2 mb-1 text-xs py-2 bg-green-50 text-myblack rounded-xs px-2">
                            {{ $equipment }}
                            {{-- <button type="button" wire:click="removeEquipment({{ $index }})" class="text-red-800 cursor-pointer">✖</button> --}}
                        </li>
                    @endforeach
                </ul>

                <p class="text-[10px] text-gray-500 mb-2">Veuillez entrer les équipements que vous offrez. Pour chaque équipement, appuyez sur la touche Entrée.</p>

                <div>
                    {{-- <label for="newEquipment" class="block text-gray-700 text-xs font-medium py-1">Ajouter un équipement</label> --}}
                    <input wire:model.defer="newEquipment" id="newEquipment" wire:keydown.enter="addEquipment"
                        class="w-full text-xs border-gray-300 shadow-sm rounded-md px-3 outline-none py-2 focus:ring focus:ring-blue-200"
                        placeholder="Ex : Wi-Fi">
                    {{-- <button type="button" wire:click="addEquipment" class="bg-blue-500 text-xs py-2 text-white px-4 rounded">Ajouter</button> --}}
                </div>
                <ul class=" flex gap-1 my-6">
                    @foreach($equipments as $index => $equipment)
                        <li class="flex justify-between items-center gap-2 mb-1 text-xs py-1 bg-green-200 rounded-sm px-2">
                            {{ $equipment }}
                            <button type="button" wire:click="removeEquipment({{ $index }})" class="text-red-800 cursor-pointer">✖</button>
                        </li>
                    @endforeach
                </ul>
                @error('equipments') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            {{--
            ===================================================================
            SECTION 5 : VISIBILITY ET MEDIAS
            ===================================================================
            --}}
            <div id="visibility-media" class="mb-8 p-6 bg-gray-50 rounded-lg border border-gray-300">
                <h2 class="text-sm font-semibold text-gray-800 mb-4">5. Visibilité et Médias</h2>

                {{-- Statuts --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label for="isAvailable" class="flex items-center space-x-2 text-xs font-medium text-gray-700 cursor-pointer">
                            <input type="checkbox" wire:model.defer='isAvailable' id="isAvailable" {{ $property->isAvailable ? 'checked' : '' }}
                                class="h-4 w-4 text-indigo-600 border-gray-300 rounded">
                            <span>Disponible (Peut être loué/vendu)</span>
                        </label>
                    </div>
                    <div>
                        <label for="active" class="flex items-center space-x-2 text-xs font-medium text-gray-700 cursor-pointer">
                            <input type="checkbox" wire:model.defer='active' id="active" {{ $property->active ? 'checked' : '' }}
                                class="h-4 w-4 text-indigo-600 border-gray-300 rounded">
                            <span>Actif (Visible sur le site)</span>
                        </label>
                    </div>
                </div>

                {{-- Image de couverture --}}
                <div class="mb-4">
                    <label for="coverImage" class="block text-xs font-medium text-gray-700">Image de Couverture Actuelle</label>
                    <div class="mt-2 flex flex-col items-start space-y-2">
                        <img src="{{ asset('storage/' . $property->coverImage) }}" alt="Couverture" class="w-24 h-24 object-cover rounded-lg">
                        <input type="file" wire:model='newCoverImage' id="coverImage"
                            class="text-xs text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-xs file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100 cursor-pointer">
                    </div>
                    @error('coverImage') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>

                {{-- Images de la galerie (similaire au code précédent) --}}
                <div class="mb-4">
                    <label for="images" class="block text-xs font-medium text-gray-700 py-1">Ajouter/Modifier la Galerie d'Images</label>
                    <div class="flex justify-start items-center space-x-2">
                        @foreach (json_decode($property->images) as $image)
                            <div class="w-24 h-24 group relative">
                                <i class="fa-solid fa-trash text-red-500 text-sm cursor-pointer absolute right-1 top-1 !hidden group-hover:!block"></i>
                                <img src="{{ asset('storage/' . $image) }}" alt="couverture" class="cursor-pointer w-full h-full object-cover rounded-md text-xs">
                            </div>
                        @endforeach
                    </div>
                    <input type="file" wire:model.defer='images[]' id="images" multiple
                        class="mt-1 block w-full text-xs text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-xs file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100 cursor-pointer">
                    @error('images') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror

                </div>
            </div>

            {{--
            ===================================================================
            ACTION BOUTONS
            ===================================================================
            --}}
            <div class="flex justify-end space-x-3 mt-6 pt-4 ">
                <a href=""
                    class="inline-flex justify-center py-2 px-4 border border-gray-300 shadow-sm text-xs font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Annuler
                </a>
                <button wire:click='update'
                    class="inline-flex justify-center py-2 px-4 cursor-pointer shadow-sm text-xs font-medium rounded-md text-mywhite bg-secondary">
                    Enregistrer les Modifications
                </button>
            </div>

        </div>
    </div>
</div>
