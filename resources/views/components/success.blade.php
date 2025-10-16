@if (session()->has('success'))
    <div
        id="flash-success"
        class="bg-green-100 text-green-800 p-2 rounded-md mb-3 transition-opacity duration-500"
    >
        {{ session('success') }}
    </div>

    <script>
        setTimeout(() => {
            const el = document.getElementById('flash-success');
            if (el) {
                el.style.opacity = '0';
                setTimeout(() => el.remove(), 500);
            }
        }, 3000);
    </script>
@endif

