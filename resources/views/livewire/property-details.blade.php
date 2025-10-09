<div class="w-full max-w-[90%] mx-auto py-6">
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    @include('components.image_gallery')
    <div class="w-full flex flex-col lg:flex-row gap-8">
        <div class="w-full  ">

            <div class="w-full flex justify-between items-center">
                <div class="">
                    <h2 class="text-lg">Well Furnished Apartment</h2>
                    <span class="text-xs">100 Smart Street, LA, USA</span>
                </div>
                <div class="flex justify-end items-center gap-2 text-xl">
                    <i class="fa-regular fa-heart"></i>
                    <i class="fa-solid fa-share-nodes"></i>
                </div>
            </div>

            <div class="w-full flex flex-wrap justify-between items-center gap-1 mt-6">
                <div class="w-[80px] h-[80px] rounded-xl bg-gray-500 flex flex-col items-center justify-center gap-2">
                    <i class="fa-solid fa-bed text-2xl text-mywhite"></i>
                    <p class="text-xs text-mywhite">3 chambres</p>
                </div>

                <div class="w-[80px] h-[80px] rounded-xl bg-gray-500 flex flex-col items-center justify-center gap-2">
                    <i class="fa-solid fa-bath text-2xl text-mywhite"></i>
                    <p class="text-xs text-mywhite">1 douche</p>
                </div>
                <div class="w-[80px] h-[80px] rounded-xl bg-gray-500 flex flex-col items-center justify-center gap-2">
                    <i class="fa-solid fa-car text-2xl text-mywhite"></i>
                    <p class="text-xs text-mywhite">Parking</p>
                </div>
                <div class="w-[80px] h-[80px] rounded-xl bg-gray-500 flex flex-col items-center justify-center gap-2">
                    <i class="fa-solid fa-bed text-2xl text-mywhite"></i>
                    <p class="text-xs text-mywhite">3 chambres</p>
                </div>
                <div class="w-[80px] h-[80px] rounded-xl bg-gray-500 flex flex-col items-center justify-center gap-2">
                    <i class="fa-solid fa-bed text-2xl text-mywhite"></i>
                    <p class="text-xs text-mywhite">3 chambres</p>
                </div>
                <div class="w-[80px] h-[80px] rounded-xl bg-gray-500 flex flex-col items-center justify-center gap-2">
                    <i class="fa-solid fa-bed text-2xl text-mywhite"></i>
                    <p class="text-xs text-mywhite">3 chambres</p>
                </div>
            </div>

            <div class="w-full mt-6">
                <h2 class="text-lg py-1">Description de l’appartement</h2>
                <p class="text-xs font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco
                    laboris nisi ut aliquip ex ea commodo consequat. magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
            </div>
            <div class="w-full mt-6">
                <h2 class="text-lg py-1">Équipements proposés</h2>
                <ul class="text-xs text-myblack font-light grid grid-cols-2">
                    <li>Wi-Fi gratuit</li>
                    <li>Television avec Netflix</li>
                    <li>Cuisine</li>
                    <li>Machine à laver</li>
                    <li>Climatiseur</li>
                </ul>
            </div>
            <div class="w-full mt-6">
                <h2 class="text-lg py-1">Sécurité et hygiène</h2>
                <ul class="text-xs text-myblack font-light grid grid-cols-2">
                    <li>Nettoyage quotidien</li>
                    <li>Extincteurs</li>
                    <li>Désinfections et stérilisations</li>
                    <li>Smoke Detectors</li>
                </ul>
            </div>
        </div>
        {{-- Card of button to book --}}
        <div class="w-full md:w-[300px] h-min shadow-md shadow-gray-200 rounded-2xl py-4 px-4">
            <h2 class="text-sm font-semibold">Tarifs</h2>
            <hr>
            <div class="flex flex-col my-3 text-xs space-y-2">
                <span>Par jour: $450</span>
                <span> Par nuit: $450</span>
                <span>Par mois: $450</span>
                <span>Par an: $450</span>
            </div>
            {{-- book button --}}
            <div class="w-full mt-6 flex items-center justify-center">
                <button wire:click="openModal"
                    class=" text-xs text-mywhite bg-secondary  py-2 px-8 cursor-pointer rounded-full">Reserver
                    maintenant</button>
            </div>
            <div class="flex items-center justify-start !text-xs mt-6">
                <a href="" class="text-blue-600"><i class="fa-solid fa-phone-volume px-2"></i>Contacter
                    l’hôte</a>
            </div>
        </div>
    </div>
    {{-- MAP --}}
    <div class="w-full mt-6">
        @include('components.map')
    </div>

    {{-- REVIEWS --}}
    <div class="w-full mt-6">
        <h2 class="text-lg py-1">Avis <i class="fa-solid fa-star"></i> 5.0</h2>
        {{-- Foreach reviews here --}}
        <div class="w-full grid grid-cols-1 lg:grid-cols-3 gap-2">
            <div class="w-full mt-6">
                <div class="w-full flex justify-start items-center gap-1">
                    <img src="{{ asset('assets/logo.jpg') }}" alt="profile" class="w-15 h-15 rounded-full">
                    <div class="">
                        <h3 class="text-sm font-semibold">John Doe</h3>
                        <span class="text-xs">8 mai 2025</span>
                    </div>
                </div>
                <p class="text-xs text-gray-500 py-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Ab nobis
                    magni dignissimos corporis iure natus explicabo consequatur, similique pariatur delectus.
                </p>
            </div>
            <div class="w-full mt-6">
                <div class="w-full flex justify-start items-center gap-1">
                    <img src="{{ asset('assets/logo.jpg') }}" alt="profile" class="w-15 h-15 rounded-full">
                    <div class="">
                        <h3 class="text-sm font-semibold">John Doe</h3>
                        <span class="text-xs">8 mai 2025</span>
                    </div>
                </div>
                <p class="text-xs text-gray-500 py-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Ab nobis
                    magni dignissimos corporis iure natus explicabo consequatur, similique pariatur delectus.
                </p>
            </div>
            <div class="w-full mt-6">
                <div class="w-full flex justify-start items-center gap-1">
                    <img src="{{ asset('assets/logo.jpg') }}" alt="profile" class="w-15 h-15 rounded-full">
                    <div class="">
                        <h3 class="text-sm font-semibold">John Doe</h3>
                        <span class="text-xs">8 mai 2025</span>
                    </div>
                </div>
                <p class="text-xs text-gray-500 py-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Ab nobis
                    magni dignissimos corporis iure natus explicabo consequatur, similique pariatur delectus.
                </p>
            </div>
            <div class="w-full mt-6">
                <div class="w-full flex justify-start items-center gap-1">
                    <img src="{{ asset('assets/logo.jpg') }}" alt="profile" class="w-15 h-15 rounded-full">
                    <div class="">
                        <h3 class="text-sm font-semibold">John Doe</h3>
                        <span class="text-xs">8 mai 2025</span>
                    </div>
                </div>
                <p class="text-xs text-gray-500 py-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Ab nobis
                    magni dignissimos corporis iure natus explicabo consequatur, similique pariatur delectus.
                </p>
            </div>
        </div>
    </div>

    {{-- Button to show all reviews --}}
    <div class="w-full mt-6">
        <button class="text-xs bg-secondary rounded-2xl py-2 px-4 cursor-pointer text-mywhite">Voir tous les
            avis</button>
    </div>

    @if($showModal)
        @include("components.modal_booking")
    @endif
</div>
