<div>
    {{-- Be like water. --}}
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

            {{-- Form field --}}
            <div class="bg-mywhite/80 backdrop-blur-md rounded-2xl p-6 shadow-sm">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Contactez-nous</h2>

                @if (session('success'))
                    <div class="mb-4 p-3 rounded-md bg-green-50 border border-green-200 text-green-800">
                        {{ session('success') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="mb-4 p-3 rounded-md bg-red-50 border border-red-200 text-red-800">
                        <ul class="list-disc list-inside text-sm">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="" method="POST" class="space-y-4">
                    @csrf

                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Nom *</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}"
                            class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-2 focus:ring-offset-1 focus:ring-indigo-400 p-2"
                            required>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">E-mail *</label>
                            <input type="email" name="email" id="email" value="{{ old('email') }}"
                                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-2 focus:ring-offset-1 focus:ring-primary p-2"
                                required>
                        </div>

                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700">Téléphone</label>
                            <input type="text" name="phone" id="phone" value="{{ old('phone') }}"
                                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-2 focus:ring-offset-1 focus:ring-primary p-2">
                        </div>
                    </div>

                    <div>
                        <label for="subject" class="block text-sm font-medium text-gray-700">Sujet *</label>
                        <input type="text" name="subject" id="subject" value="{{ old('subject') }}"
                            class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-2 focus:ring-offset-1 focus:ring-primary p-2">
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700">Message *</label>
                        <textarea name="message" id="message" rows="5" required
                            class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-2 focus:ring-offset-1 focus:ring-indigo-400 p-2">{{ old('message') }}</textarea>
                    </div>

                    <div class="flex items-center justify-between">
                        <button type="submit"
                            class="text-xs inline-flex items-center gap-2 bg-secondary text-mywhite px-4 py-2 rounded-full font-medium cursor-pointer">
                            Envoyer le message
                        </button>

                        <p class="text-sm text-gray-500">* champs obligatoires</p>
                    </div>
                </form>
            </div>

            {{-- Info and MAP --}}
            <div class="space-y-6">
                <div class="bg-white/80 backdrop-blur-md rounded-2xl p-6 shadow-sm">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Nos coordonnées</h3>

                    <p class="text-sm text-gray-600 mb-2"><strong>E-mail : </strong>
                        <a href="mailto:contact@exemple.com"
                            class="text-indigo-600 hover:underline">contact@exemple.com</a>
                    </p>

                    <p class="text-sm text-gray-600 mb-2"><strong>Téléphone : </strong>
                        <a href="tel:+261331234567" class="text-indigo-600 hover:underline">+261 33 12 34 567</a>
                    </p>

                    <p class="text-sm text-gray-600"><strong>Adresse : </strong>Rue Exemple, Ville, Pays</p>
                </div>

                <div class="rounded-2xl overflow-hidden shadow-sm">

                    <div class="rounded-2xl overflow-hidden border border-gray-200 shadow-sm">
                        <div class="p-4 bg-white/80">
                            <h4 class="text-lg font-medium text-gray-800 mb-2">Notre localisation</h4>
                            <p class="text-xs text-gray-500 mb-3">458IG Amboboka — Mahajanga, Madagascar</p>
                        </div>

                        <div class="w-full h-72 md:h-96">
                            <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0"
                                marginwidth="0"
                                src="https://www.openstreetmap.org/export/embed.html?bbox=46.3410%2C-15.6453%2C46.3610%2C-15.6253&layer=mapnik&marker=-15.6353%2C46.3510"
                                style="border:0;">
                            </iframe>
                            <div class="p-3 text-xs text-gray-500 bg-white/70">
                                <a href="https://www.openstreetmap.org/?mlat=-15.6353&mlon=46.3510#map=15/-15.6353/46.3510"
                                    target="_blank" rel="noopener" class="underline">
                                    Voir sur OpenStreetMap
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
