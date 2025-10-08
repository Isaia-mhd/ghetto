<script>
    function initGalleryScroll() {
        const gallery = document.getElementById("gallery");
        const leftBtn = document.getElementById("scrollLeft");
        const rightBtn = document.getElementById("scrollRight");

        if (gallery && leftBtn && rightBtn) {
            leftBtn.onclick = () => gallery.scrollBy({ left: -300, behavior: "smooth" });
            rightBtn.onclick = () => gallery.scrollBy({ left: 300, behavior: "smooth" });
        }
    }

    // 1. Quand la page est chargée normalement
    document.addEventListener("DOMContentLoaded", initGalleryScroll);

    // 2. Quand Livewire a fini de remplacer la page (wire:navigate)
    document.addEventListener("livewire:navigated", initGalleryScroll);
</script>
