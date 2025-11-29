<div wire:poll.3s>
    @if($unread > 0)
        <span
            class="absolute -top-1 -right-1 bg-red-600 text-white text-[10px] font-bold rounded-full min-w-[18px] h-[18px] flex items-center justify-center">
            {{ $unread }}
        </span>
    @endif
</div>
