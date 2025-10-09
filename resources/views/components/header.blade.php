<header class="bg-primary w-full py-2">
    <div class="w-full h-full max-w-[90%] mx-auto flex justify-between items-center gap-6">
        <div class="w-[20%] flex justify-start items-center gap-2">
            <img src="{{ asset("assets/logo.jpg") }}" alt="Ghetto" class="w-10 h-10 rounded-full">
            <h2 class="text-mywhite text-2xl font-semibold">Ghetto</h2>
        </div>
        <ul
            class="w-[80%] text-xs text-mywhite lg:text-sm font-semibold hidden md:flex justify-between items-center gap-3">
            <a href="{{ route("home") }}" wire:navigate>Accueil</a>
            <a href="{{ route("property") }}" wire:navigate>Maisons</a>
            <a href="/contact" wire:navigate>Telecharger l'App Mobile</a>
            <a href="/" wire:navigate>FAQs</a>
            <a href="{{ route("contact") }}" wire:navigate>Contact</a>
            <a href="{{ route("about") }}" wire:navigate>A propos</a>
            <a href="{{ route("login") }}" wire:navigate class="bg-secondary font-semibold text-xs py-2 px-3 rounded-full">Connexion</a>
            @auth
                <a href="{{ route("profile") }}"
                    class="w-20 h-10 hidden border-2 py-2 border-primary hover:border-secondary duration-700 lg:flex justify-center items-center gap-2 rounded-full">
                    <i class="fa-solid fa-bars"></i>
                    <div class="w-8 h-8 rounded-full bg-gray-500 flex justify-center items-center"><i
                            class="fa-solid fa-user"></i></div>
                </a>
            @endauth
        </ul>

        {{-- Hamburger (mobile) --}}
        @include("components.hamberger_btn")
    </div>
</header>

{{-- Menu mobile (sidebar à droite) --}}
@include("components.mobile_menu")

@include("components.script_header_responsive")

