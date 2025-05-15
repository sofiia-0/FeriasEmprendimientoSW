<x-app-layout>
    <x-slot name="header">
        <h2 class="font-extrabold text-4xl text-[#485065] dark:text-[#EAE2CF] tracking-tight drop-shadow-lg">
            {{ __('Mis Ferias Registradas') }}
        </h2>
    </x-slot>

    <div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
        @if($misFerias->isEmpty())
            <p class="text-center text-gray-500">No estás registrado en ninguna feria.</p>
        @else
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($misFerias as $feria)
                    <div
                        
                        :class="expanded ? 'border-[#D24F6B]' : 'border-[#EAE2CF] dark:border-[#485065]'"
                        class="bg-[#F5F3EA] dark:bg-[#586078] border border-transparent shadow-2xl rounded-3xl p-8 hover:scale-105 hover:shadow-3xl transition-all duration-300 relative overflow-hidden"
                        @click="expanded = !expanded"
                    >
                        <!-- Efecto decorativo -->
                        <div class="absolute -top-8 -right-8 w-24 h-24 bg-gradient-to-br from-[#588B71] to-[#D24F6B] rounded-full opacity-30 pointer-events-none"></div>
                        <!-- Contenido de la feria -->
                        <div x-show="expanded" x-transition class="flex flex-col items-start space-y-2">
                            <h3 class="text-2xl font-extrabold text-[#485065] dark:text-[#EAE2CF] mb-2">{{ $feria->nombre }}</h3>
                            <div class="flex items-center gap-2 text-[#485065] dark:text-[#EAE2CF]">
                                <span class="inline-block bg-[#588B71]/20 text-[#588B71] px-2 py-1 rounded-lg text-xs font-semibold">📅 {{ $feria->fecha_evento->format('Y-m-d') }}</span>
                                <span class="inline-block bg-[#485065]/20 text-[#485065] px-2 py-1 rounded-lg text-xs font-semibold">⏰ {{ \Carbon\Carbon::parse($feria->hora_evento)->format('g:i A') }}</span>
                            </div>
                            <p class="text-[#588B71] dark:text-[#EAE2CF] text-sm">📍 {{ $feria->lugar }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</x-app-layout>
