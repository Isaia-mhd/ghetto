<div>
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-xl font-bold text-gray-800 flex items-center gap-2">
            <i class="fa-solid fa-bell text-green-600"></i>
            Notifications
        </h1>
    </div>

    <div class="min-h-screen bg-mywhite p-6">
        <p wire:click='markAllAsReread'
            class="flex items-center gap-2 text-blue-600 font-semibold text-xs cursor-pointer">
            Marquer tout comme lu
        </p>
        {{-- @if(count($notifications) > 0) --}}
            <ul class="divide-y divide-gray-200" wire:poll>
                @foreach ($notifications as $notification)
                    <li class="py-4">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 pt-1">
                                    @if(!$notification->read_at)
                                        <span class="inline-block h-2 w-2 rounded-full bg-blue-500 mr-2"></span>
                                    @endif
                                </div>
                                <div class="ml-3 flex-1">
                                    <p class="text-xs font-medium text-gray-900">{{ $notification->data["message"] }}</p>
                                    <p class="text-xs text-gray-500 mt-1">{{ $notification->created_at->diffForHumans() }}</p>
                                </div>
                                <div class="flex justify-start gap-2 items-center">
                                    <button
                                    wire:click="markAsRead('{{ $notification->id }}')"
                                    class=" flex items-center gap-3  py-1 px-3 rounded-full transition cursor-pointer">
                                    @if (!$notification->read_at)
                                        <i class="fa-solid fa-eye"></i>
                                    @else
                                        <i class="fa-solid fa-eye-slash"></i>
                                    @endif
                                </button>
                                <button
                                    wire:click="delete('{{ $notification->id }}')"
                                    class="  flex items-center gap-3 py-1 px-3 rounded-full transition cursor-pointer">
                                    <i class="fa-solid fa-trash text-red-600"></i>
                                </button>
                                </div>
                                {{-- <livewire:view-notification :notification="$notification" :key="$notification->id"/> --}}
                            </div>
                    </li>
                @endforeach()
            </ul>
        {{-- @else
            <div class="text-center py-10">
                <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6.422 7.56 5.86 9H3v2h2.292c.607.72 1.343 1.353 2.18 1.884V14a6.002 6.002 0 0012 0v-2.158l.405.405c.957.957 2.115 1.488 3.328 1.488H21v-2h-2.172c-1.213 0-2.371-.531-3.328-1.488L15 17zM12 20a2 2 0 11-4 0 2 2 0 014 0z"></path>
                </svg>
                <p class="mt-4 text-sm text-gray-500">You're all caught up! No new notifications.</p>
            </div>
        @endif --}}
    </div>
</div>

