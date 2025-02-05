<div class="flex flex-col h-full">

    <div class="flex-1">
        {{ $slot }}
    </div>

   
    <div class="p-4">
        <form method="POST" action="{{ route('filament.auth.logout') }}">
            @csrf
            <button type="submit" class="w-full flex items-center gap-2 p-3 text-red-600 hover:bg-red-100 rounded-md">
                <x-heroicon-o-logout class="w-5 h-5" />
                <span>logout</span>
            </button>
        </form>
    </div>
</div>
