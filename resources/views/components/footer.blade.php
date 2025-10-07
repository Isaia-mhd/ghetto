<footer class="w-full bg-primary py-6 text-mywhite px-6">
    @include("components.newsletter")
    <div class="flex justify-between items-start gap-8 mt-6">
        {{-- the 3 title --}}
        <div class="w-full grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 justify-between items-start gap-8">
            <div class="">
                <h2 class="text-sm font-semibold pb-2">GHETTO</h2>
                <p class="text-xs">Trouvez votre logement idéal en un clic</p>
                <div class="w-full flex gap-2 mt-6">
                    <button class="py-2 px-4 text-xs text-myblack rounded-full bg-gray-300 cursor-pointer">PlayStore</button>
                    <button class="py-2 px-4 text-xs text-myblack rounded-full bg-gray-300 cursor-pointer">AppleStore</button>
                </div>
            </div>
            <div class="">
                <h2 class="text-sm font-semibold pb-2">ENTREPRISE</h2>
                <div class="flex flex-col text-sm space-y-2">
                    <a href="">A propos de nous</a>
                    <a href="">Information légale</a>
                    <a href="">Contact</a>
                    <a href="">Blogs</a>
                </div>
            </div>
            <div class="">
                <h2 class="text-sm font-semibold pb-2">CENTRE D'AIDE</h2>
                <div class="flex flex-col text-sm space-y-2">
                    <a href="">Rechercher une propriété</a>
                    <a href="">Guide pour héberger</a>
                    <a href="">Pourquoi nous ?</a>
                    <a href="">FAQs</a>
                </div>
            </div>
            <div class="">
                <h2 class="text-sm font-semibold pb-2">CONTACT INFO</h2>
                <div class="flex flex-col text-sm space-y-2">
                    <p>Phone: +2359684833</p>
                    <p>E-mail: ghetto@gmail.com</p>
                    <p>Location: Antananarivo, Madagascar</p>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full text-center text-xs mt-6 py-4">
        <p>copyright&copy; ghetto-{{ date('Y') }}</p>
    </div>
</footer>
