<script>
    function initMobileMenu() {
        const menuBtn = document.getElementById("menu-btn");
        const closeBtn = document.getElementById("close-btn");
        const mobileMenu = document.getElementById("mobile-menu");

        if (menuBtn && closeBtn && mobileMenu) {
            // Empêcher doublons d'écouteurs en les reset
            menuBtn.onclick = () => mobileMenu.classList.remove("translate-x-full");
            closeBtn.onclick = () => mobileMenu.classList.add("translate-x-full");
        }
    }

    // 1. Au premier chargement complet
    document.addEventListener("DOMContentLoaded", initMobileMenu);

    // 2. Après chaque wire:navigate
    document.addEventListener("livewire:navigated", initMobileMenu);
</script>

