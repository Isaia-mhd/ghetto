<div x-data="{ open: false }" class="relative">

    <!-- Notification button -->
    <div class="relative w-full">
        <button
            @click="open = true"
            class="w-full flex items-center justify-center cursor-pointer rounded-full relative p-2">
            <i class="fa-solid fa-bell text-white text-lg"></i>
        </button>
    </div>

    <!-- Modal -->
    <div
        x-show="open"
        x-transition.opacity
        class="fixed inset-0 z-50 flex items-center justify-center bg-black/50">

        <div
            @click.outside="open = false"
            x-transition.scale
            class="bg-white rounded-xl shadow-xl p-6 w-96 max-h-[90vh] overflow-y-auto">

            <!-- Header -->
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-lg font-semibold text-gray-800">Notifications</h2>

                <button
                    wire:click="markAllAsRead"
                    class="text-xs text-blue-600 hover:text-blue-700 cursor-pointer">
                    Marquer tout comme lu
                </button>
            </div>

            <!-- Notifications list -->
            @if(count($notifications) > 0)
                <ul class="divide-y divide-gray-200">
                    @foreach ($notifications as $notification)
                        <li class="py-4">

                            <div class="flex items-start gap-3">

                                @if(!$notification->read_at)
                                    <span class="h-2 w-2 rounded-full bg-blue-500 mt-2"></span>
                                @endif

                                <div class="flex-1">
                                    <p class="text-xs text-gray-900 font-light">
                                        {{ $notification->data["message"] }}
                                    </p>
                                    <p class="text-xs text-gray-500 mt-1">
                                        {{ $notification->created_at->diffForHumans() }}
                                    </p>
                                </div>
                            </div>

                            <div class="mt-3 flex items-center gap-3 justify-end">

                                <button
                                    wire:click="markAsRead('{{ $notification->id }}')"
                                    class="p-2 rounded-full hover:bg-gray-100 transition text-gray-700 cursor-pointer">
                                    @if (!$notification->read_at)
                                        <i class="fa-solid fa-eye"></i>
                                    @else
                                        <i class="fa-solid fa-eye-slash"></i>
                                    @endif
                                </button>

                                <button
                                    wire:click="delete('{{ $notification->id }}')"
                                    class="p-2 rounded-full hover:bg-red-100 transition cursor-pointer">
                                    <i class="fa-solid fa-trash text-red-600"></i>
                                </button>
                            </div>

                        </li>
                    @endforeach
                </ul>

            @else
                <div class="text-center py-10">
                    <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6.422 7.56 5.86 9H3v2h2.292c.607.72 1.343 1.353 2.18 1.884V14a6.002 6.002 0 0012 0v-2.158l.405.405c.957.957 2.115 1.488 3.328 1.488H21v-2h-2.172c-1.213 0-2.371-.531-3.328-1.488L15 17z"/>
                    </svg>
                    <p class="mt-4 text-sm text-gray-500">
                        Vous êtes à jour ! Aucune nouvelle notification.
                    </p>
                </div>
            @endif

            <div class="flex justify-end mt-6 border-t pt-4">
                <button
                    @click="open = false"
                    class="px-4 py-2 text-xs bg-gray-400 rounded-md hover:bg-gray-300 transition cursor-pointer">
                    Fermer
                </button>
            </div>

        </div>
    </div>
</div>
