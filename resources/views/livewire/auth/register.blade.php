<div class="w-full h-full bg-cover bg-center flex items-center justify-center"
    style="background-image: url('{{ asset('assets/bg.jpg') }}');">

    <div class="bg-primary/80 border border-mywhite/30 rounded-2xl p-8  mt-3 mb-3 w-full max-w-sm">

        <div class="text-center mb-8">
            <h2 class="text-xl font-bold text-mywhite ">Inscription</h2>
        </div>

        <form class="space-y-3">
            <div>
                <label for="email" class="block text-sm text-mywhite font-semibold">Nom complet</label>
                <input type="text" id="name"
                    class="mt-1 w-full rounded-lg bg-mywhite/20 border border-mywhite/30 px-4 py-1 text-myblack placeholder-white/40 focus:border-mywhite/40 focus:ring focus:ring-mywhite/20">
            </div>
            <div>
                <label for="email" class="block text-sm text-mywhite font-semibold">Email</label>
                <input type="email" id="email"
                    class="mt-1 w-full rounded-lg bg-mywhite/20 border border-mywhite/30 px-4 py-1 text-myblack placeholder-white/40 focus:border-mywhite/40 focus:ring focus:ring-mywhite/20">
            </div>

            <div>
                <label for="password" class="block text-sm text-mywhite font-semibold">Mot de passe</label>
                <input type="password" id="password"
                    class="mt-1 w-full rounded-lg bg-mywhite/20 border border-mywhite/30 px-4 py-1 text-myblack placeholder-white/40 focus:border-white/40 focus:ring focus:ring-white/20">
            </div>

            <button type="submit"
                class="w-full bg-secondary text-mywhite text-xs font-semibold py-2 rounded-lg shadow-lg hover:opacity-90 transition cursor-pointer">S'inscrire</button>
        </form>

        {{-- Divider --}}
        <div class="flex items-center gap-4 my-6">
            <div class="flex-1 h-px bg-mywhite/30"></div>
            <span class="text-xs text-mywhite/60 uppercase">ou continuer avec</span>
            <div class="flex-1 h-px bg-mywhite/30"></div>
        </div>

        {{-- Social --}}
        <div class="flex justify-center gap-4">
            <button
                class="w-12 h-12 rounded-xl bg-mywhite/10 border border-mywhite/30 cursor-pointer flex items-center justify-center hover:bg-mywhite/20">
                <i class="fa fa-solid fa-google text-red-500"></i>
            </button>
            <button
                class="w-12 h-12 rounded-xl bg-mywhite/10 border border-mywhite/30 cursor-pointer flex items-center justify-center hover:bg-mywhite/20">
                <i class="fa fa-solid fa-facebook text-mywhite"></i>
            </button>
        </div>

        <!-- Signup -->
        <p class="text-center text-mywhite/70 text-sm mt-6">
            Déjà un compte? <a href="{{ route(name: "login") }}" wire:navigate
                class="font-semibold text-mywhite hover:underline">Se connecter</a>
        </p>

    </div>
</div>
