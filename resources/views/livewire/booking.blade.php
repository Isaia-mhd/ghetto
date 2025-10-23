<div x-data="{ open: false }" class="relative">

    {{-- Button to open modal --}}
    <button @click="open = true"
        class="w-full text-xs cursor-pointer bg-secondary text-mywhite py-3 px-8 rounded-full font-normal shadow-md hover:bg-secondary-dark transition-colors">
        Réserver maintenant
    </button>

    {{-- Modal --}}
    <div x-show="open" x-transition class="fixed inset-0 flex items-center justify-center bg-black/50 z-50">

        <div @click.outside="open = false"
            class="bg-white rounded-xl shadow-lg p-6 w-2xl z-10 transform transition-transform scale-95 animate-zoomIn">

            <h2 class="text-lg font-semibold text-gray-800 mb-4">Réserver cette maison</h2>

            {{-- booking content  --}}
            <div x-data="bookingComponent()" x-init="init()" class="space-y-4">

                {{-- Guest --}}
                <div>
                    <label class="block text-xs font-medium text-gray-700 mb-1">Nombre de personnes</label>
                    <input type="number" wire:model="guest" placeholder="Ex: 2"
                        class="w-full rounded-md px-3 py-2 text-sm border border-gray-200 shadow-md outline-none">
                    @error('guest')
                        <p class="text-red-500 text-xs">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Check in --}}
                <div>
                    <label class="block text-xs font-medium text-gray-700 mb-1">Date d'entrée</label>
                    <input x-ref="checkin" type="text" placeholder="Choisir la date d'entrée"
                        class="w-full rounded-md px-3 py-2 text-sm border border-gray-200 shadow-md outline-none">
                    @error('check_in')
                        <p class="text-red-500 text-xs">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Check Out --}}
                <div>
                    <label class="block text-xs font-medium text-gray-700 mb-1">Date de sortie</label>
                    <input x-ref="checkout" type="text" placeholder="Choisir la date de sortie"
                        class="w-full rounded-md px-3 py-2 text-sm border border-gray-200 shadow-md outline-none">
                    @error('check_out')
                        <p class="text-red-500 text-xs">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Dipalying the dates selected --}}
                @if ($check_in && $check_out)
                    <div class="mt-2 p-2 bg-green-50 rounded-md border border-green-200 text-green-700 text-xs">
                        Réservation du <strong>{{ \Carbon\Carbon::parse($check_in)->format('d M Y') }}</strong>
                        au <strong>{{ \Carbon\Carbon::parse($check_out)->format('d M Y') }}</strong>
                    </div>
                @endif
            </div>

            {{-- Actions --}}
            <div class="flex justify-end gap-3 mt-6">
                <button @click="open = false"
                    class="text-xs cursor-pointer px-4 py-2 bg-gray-200 rounded-md hover:bg-gray-300">
                    Annuler
                </button>
                <button wire:click="book({{ $property->id }})"
                    class="px-4 py-2 bg-green-600 text-mywhite text-xs rounded-md cursor-pointer hover:bg-green-700 transition">
                    Confirmer la réservation
                </button>
            </div>
        </div>
    </div>
</div>

{{-- Script Alpine + Flatpickr --}}
<script>
function bookingComponent() {
    return {
        booked: {{ Js::from($bookedDates) }}, // Dates déjà réservées
        init() {
            // Flatpickr for check_in
            flatpickr(this.$refs.checkin, {
                dateFormat: 'Y-m-d',
                minDate: 'today',
                disable: this.booked,
                onChange: (selectedDates, dateStr) => {
                    this.$wire.set('check_in', dateStr);
                }
            });

            // Flatpickr for check_out
            flatpickr(this.$refs.checkout, {
                dateFormat: 'Y-m-d',
                minDate: 'today',
                disable: this.booked,
                onChange: (selectedDates, dateStr) => {
                    this.$wire.set('check_out', dateStr);
                }
            });
        }
    }
}
</script>
