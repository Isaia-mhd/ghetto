@if (session()->has('error'))
    <div
        id="flash-error"
        class="bg-red-100 text-red-500 p-2 rounded-md mb-3 transition-opacity duration-500 text-xs"
    >
        {{ session('error') }}
    </div>

    <script>
        setTimeout(() => {
            const el = document.getElementById('flash-error');
            if (el) {
                el.style.opacity = '0';
                setTimeout(() => el.remove(), 500);
            }
        }, 3000);
    </script>
@endif
