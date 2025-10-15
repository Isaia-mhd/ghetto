<div class="w-full my-6">
    <h2 class="text-md font-semibold mb-2">Équipements proposés</h2>
    <ul class="grid grid-cols-2 lg:grid-cols-3 gap-y-2 text-gray-700 text-xs">
        @php
            $equipments = json_decode($property->equipments, true);
        @endphp
        @if (is_array($equipments))
            @foreach ($equipments as $equipment)
                <li>
                    <i class="fa-solid fa-check text-green-500 mr-2"></i>
                    {{ $equipment }}
                </li>
            @endforeach
        @endif
        @if ($property->parking)
            <li>
                <i class="fa-solid fa-car text-green-500 mr-2"></i>
                Parking
            </li>
        @endif
        @if ($property->kitchen)
            <li>
                <i class="fa-solid fa-kitchen-set text-green-500 mr-2"></i>
                Cuisine
            </li>
        @endif
    </ul>
</div>
