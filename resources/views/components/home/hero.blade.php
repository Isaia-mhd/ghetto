<div class="relative bg-cover bg-center h-[80vh] rounded-b-lg" style="background-image: url({{ asset('assets/bg.jpg') }}); backgoround-size: cover; background-position: center;">
    <div class="relative z-10 flex flex-col items-center justify-center h-full text-centerpx-6 text-center">
        <h1 class="text-2xl  md:text-4xl mb-6 text-primary font-semibold">
            Trouvez votre maison d'hôtes idéale
        </h1>
        <p class="text-xs mb-8 max-w-2xl text-myblack font-semibold">
            Réservez facilement des séjours authentiques et découvrez des expériences uniques dans des maisons d'hôtes locales.
        </p>

        <!-- Search Form -->
        @include("components.home.search_form")
    </div>
</div>

