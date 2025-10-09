<div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="text-center mb-12">
        <p class="text-sm text-gray-600 max-w-2xl mx-auto">
            Bienvenue sur notre plateforme ! Nous sommes Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum in laboriosam cumque, nulla esse debitis.
        </p>
    </div>

    {{-- Section presentation --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center mb-16">
        <div>
            <img src="{{ asset('assets/house1.jpg') }}" alt="Notre équipe" class="rounded-2xl shadow-md object-cover w-full h-80">
        </div>
        <div>
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Qui sommes-nous ?</h2>
            <p class="text-sm text-gray-600 leading-relaxed">
                Nous sommes une équipe de Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto perspiciatis quisquam perferendis exercitationem tenetur? Veniam illo molestiae quaerat ducimus harum expedita facilis quam distinctio ad eos, provident eligendi maiores dolores?</p>
            <p class="text-gray-600 leading-relaxed mt-3">
                Ce projet est né d’une volonté d’innovation et d’entraide. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet, debitis tenetur! Error deserunt tenetur facere. Nobis qui maiores necessitatibus optio!
            </p>
        </div>
    </div>

    {{-- Mission & Value --}}
    <div class="bg-white/80 backdrop-blur-md border border-gray-200 rounded-2xl p-8 mb-16 shadow-sm">
        <h2 class="text-xl font-semibold text-gray-800 mb-6 text-center">Notre mission & nos valeurs</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
            <div class="p-4">
                <i class="fa-solid fa-bullseye text-primary text-3xl mb-3"></i>
                <h3 class="text-lg font-semibold text-gray-800 mb-2">Notre mission</h3>
                <p class="text-gray-600 text-sm">
                    Créer des outils numériques simples, puissants et accessibles pour améliorer le quotidien de nos utilisateurs.
                </p>
            </div>
            <div class="p-4">
                <i class="fa-solid fa-handshake text-primary text-xl mb-3"></i>
                <h3 class="text-lg font-semibold text-gray-800 mb-2">Nos valeurs</h3>
                <p class="text-gray-600 text-sm">
                    Collaboration, innovation et respect : des principes essentiels qui guident notre travail au quotidien.
                </p>
            </div>
            <div class="p-4">
                <i class="fa-solid fa-heart text-primary text-3xl mb-3"></i>
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Notre vision</h3>
                <p class="text-gray-600 text-sm">
                    Devenir une référence dans le développement web collaboratif et inspirer d’autres à créer avec passion.
                </p>
            </div>
        </div>
    </div>

    {{-- Team --}}
    <div class="mb-16">
        <h2 class="text-xl font-semibold text-gray-800 mb-8 text-center">Notre équipe</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            {{-- Member --}}
            <div class="bg-white/80 backdrop-blur-md border border-gray-200 rounded-2xl p-6 text-center shadow-sm">
                <img src="{{ asset('assets/house1.jpg') }}" alt="Andoniaina Isaia Mohamed"
                     class="w-24 h-24 rounded-full mx-auto mb-4 object-cover shadow">
                <h3 class="font-semibold text-gray-800">Rakoto</h3>
                <p class="text-sm text-gray-500 mb-2">CEO</p>
            </div>
            <div class="bg-white/80 backdrop-blur-md border border-gray-200 rounded-2xl p-6 text-center shadow-sm">
                <img src="{{ asset('assets/house1.jpg') }}" alt="Andoniaina Isaia Mohamed"
                     class="w-24 h-24 rounded-full mx-auto mb-4 object-cover shadow">
                <h3 class="font-semibold text-gray-800">Rabe</h3>
                <p class="text-sm text-gray-500 mb-2">Assistant Technique</p>
            </div>
            <div class="bg-white/80 backdrop-blur-md border border-gray-200 rounded-2xl p-6 text-center shadow-sm">
                <img src="{{ asset('assets/house1.jpg') }}" alt="Andoniaina Isaia Mohamed"
                     class="w-24 h-24 rounded-full mx-auto mb-4 object-cover shadow">
                <h3 class="font-semibold text-gray-800">Randria</h3>
                <p class="text-sm text-gray-500 mb-2">Commercial</p>

            </div>

        </div>
    </div>

    {{-- Section for rapid contact  --}}
    <div class="text-center">
        <h2 class="text-xl font-semibold text-gray-800 mb-2">Vous souhaitez en savoir plus ?</h2>
        <p class=" text-sm text-gray-600 mb-4">N’hésitez pas à nous écrire, nous serons ravis d’échanger avec vous.</p>
        <a href="{{ route('contact') }}" wire:navigate
           class="inline-block bg-secondary text-xs text-mywhite px-6 py-3 rounded-full font-medium transition">
            Nous contacter
        </a>
    </div>
</div>
