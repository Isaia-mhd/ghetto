<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-xl font-bold text-gray-800 flex items-center gap-2">
            <i class="fa-solid fa-hotel text-blue-600"></i>
            Gerer votre Hotel
        </h1>
    </div>
    <div class="min-h-screen bg-mywhite p-6">
        {{-- Cards section --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            {{-- Houses --}}
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-200 hover:shadow-md transition">
                <div class="flex items-center justify-between mb-2">
                    <h2 class="text-lg font-semibold text-gray-700">Mes hotels</h2>
                    <i class="fa-solid fa-building text-blue-500 text-xl"></i>
                </div>
                <p class="text-gray-500 text-sm">Gérez vos hotels, disponibilités et tarifs.</p>
                <a href="#" class="inline-block mt-4 text-blue-600 hover:underline text-sm font-medium">
                    Voir toutes mes hotels →
                </a>
            </div>

            {{-- Booking --}}
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-200 hover:shadow-md transition">
                <div class="flex items-center justify-between mb-2">
                    <h2 class="text-lg font-semibold text-gray-700">Mes chambres</h2>
                    <i class="fa-solid fa-calendar-check text-green-500 text-xl"></i>
                </div>
                <p class="text-gray-500 text-sm">Suivez les réservations en attente ou confirmées.</p>
                <a href="#" class="inline-block mt-4 text-green-600 hover:underline text-sm font-medium">
                    Gérer les chambres →
                </a>
            </div>

            {{-- Reviews --}}
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-200 hover:shadow-md transition">
                <div class="flex items-center justify-between mb-2">
                    <h2 class="text-lg font-semibold text-gray-700">Avis des clients</h2>
                    <i class="fa-solid fa-star text-yellow-500 text-xl"></i>
                </div>
                <p class="text-gray-500 text-sm">Consultez les retours de vos voyageurs.</p>
                <a href="#" class="inline-block mt-4 text-yellow-600 hover:underline text-sm font-medium">
                    Voir les avis →
                </a>
            </div>
        </div>

        {{-- Stats section --}}
        <div class="mt-10 bg-white rounded-2xl p-6 shadow-sm border border-gray-200">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Statistiques rapides</h2>
            <div class="grid sm:grid-cols-3 gap-6 text-center">
                <div>
                    <p class="text-2xl font-bold text-blue-600">12</p>
                    <p class="text-gray-500 text-sm">Annonces actives</p>
                </div>
                <div>
                    <p class="text-2xl font-bold text-green-600">28</p>
                    <p class="text-gray-500 text-sm">Réservations ce mois</p>
                </div>
                <div>
                    <p class="text-2xl font-bold text-yellow-500">4.8 ★</p>
                    <p class="text-gray-500 text-sm">Note moyenne</p>
                </div>
            </div>
        </div>
    </div>
</div>
