<div id="mobile-menu"
    class="fixed top-0 right-0 h-full w-64 bg-primary text-myblack font-semibold p-6 transform translate-x-full transition-transform duration-300 lg:hidden z-100">
    <button id="close-btn" class="text-red-300 mb-6 cursor-pointer">
        ✖
    </button>
    <ul class="flex flex-col space-y-4 text-xs text-mywhite">
        <a href="{{ route('home') }}" wire:navigate>Accueil</a>
        <a href="{{ route("property") }}" wire:navigate>Maisons</a>
        <a href="/contact" wire:navigate>Telecharger l'App Mobile</a>
        <a href="/" wire:navigate>FAQs</a>
        <a href="/contact" wire:navigate>Contact</a>
        <a href="{{ route("contact") }}" wire:navigate>A propos</a>
        <a href="{{ route("login") }}" wire:navigate class="bg-secondary font-semibold text-xs text-mywhite py-2 px-3 rounded-full">Connexion</a>
        @auth
            <a href="{{ route("profile") }}" wire:navigate
                class="w-20 h-10 hidden border-2 py-2 border-primary hover:border-secondary duration-700 lg:flex justify-center items-center gap-2 rounded-full">
                <i class="fa-solid fa-bars"></i>
                <div class="w-8 h-8 rounded-full bg-gray-500 flex justify-center items-center"><i
                        class="fa-solid fa-user"></i></div>
            </a>
        @endauth
    </ul>
</div>
