<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-extrabold text-4xl text-[#485065] dark:text-[#EAE2CF] tracking-tight drop-shadow-lg">
                {{ __('Ferias disponibles') }}
            </h2>

            <!-- Solo muestra el botón de crear si el usuario es admin -->
            @if(Auth::user()->product_type === 'Administrador')
                <a href="{{ route('ferias.create') }}"
                   class="inline-flex items-center gap-2 px-6 py-2 bg-[#588B71] text-white text-lg font-bold rounded-2xl shadow-xl hover:scale-105 hover:bg-[#485065] transition-all duration-200">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24">
                        <path d="M12 4v16m8-8H4"></path>
                    </svg>
                    {{ __('Crear Nueva Feria') }}
                </a>
            @endif
        </div>
    </x-slot>

    <div class="py-16 bg-white dark:bg-gray-900 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">
                @foreach($ferias as $feria)
                    <div
                        x-data="{ expanded: false, confirmDelete: false }"
                        :class="expanded ? 'border-[#D24F6B]' : 'border-[#EAE2CF] dark:border-[#485065]'"
                        class="bg-[#F5F3EA] dark:bg-[#586078] border border-transparent shadow-2xl rounded-3xl p-8 hover:scale-105 hover:shadow-3xl transition-all duration-300 relative overflow-hidden"
                        @click="expanded = !expanded"
                    >
                        <!-- Efecto decorativo -->
                        <div class="absolute -top-8 -right-8 w-24 h-24 bg-gradient-to-br from-[#588B71] to-[#D24F6B] rounded-full opacity-30 pointer-events-none"></div>
                        <!-- Contenido de la feria -->
                        <div x-show="!confirmDelete" x-transition class="flex flex-col items-start space-y-2">
                            <h3 class="text-2xl font-extrabold text-[#485065] dark:text-[#EAE2CF] mb-2">{{ $feria->nombre }}</h3>
                            <div class="flex items-center gap-2 text-[#485065] dark:text-[#EAE2CF]">
                                <span class="inline-block bg-[#588B71]/20 text-[#588B71] px-2 py-1 rounded-lg text-xs font-semibold">📅 {{ $feria->fecha_evento->format('Y-m-d') }}</span>
                                <span class="inline-block bg-[#485065]/20 text-[#485065] px-2 py-1 rounded-lg text-xs font-semibold">⏰ {{ \Carbon\Carbon::parse($feria->hora_evento)->format('g:i A') }}</span>
                            </div>
                            <p class="text-[#588B71] dark:text-[#EAE2CF] text-sm">📍 {{ $feria->lugar }}</p>

                            <!-- Descripción expandida/colapsada -->
                            <p class="text-[#485065] dark:text-[#EAE2CF] mt-2" :class="expanded ? 'line-clamp-none' : 'line-clamp-3'">
                                {{ $feria->descripcion }}
                            </p>

                            <!-- Botones de acción -->
                            <div class="mt-5 flex justify-start space-x-3">
                                <!-- Solo muestra los botones de editar y eliminar si el usuario es admin -->
                                @if(Auth::user()->product_type === 'Administrador')
                                    <a href="{{ route('ferias.edit', $feria) }}"
                                       class="px-5 py-2 bg-[#EAE2CF] text-[#485065] font-bold rounded-xl shadow hover:bg-[#588B71] hover:text-white hover:scale-105 transition border border-[#485065]">
                                        {{ __('Editar') }}
                                    </a>
                                    <button @click="confirmDelete = true"
                                            class="px-5 py-2 bg-[#D24F6B]/20 text-[#D24F6B] font-bold rounded-xl hover:bg-[#D24F6B]/40 hover:scale-105 transition">
                                        {{ __('Eliminar') }}
                                    </button>
                                @endif
                            </div>
                        </div>
                        <!-- Confirmación de eliminación -->
                        <div x-show="confirmDelete" x-transition class="flex flex-col items-center text-center mt-8">
                            <p class="text-[#D24F6B] font-bold mb-4 text-lg">{{ __('¿Estás seguro de eliminar?') }}</p>
                            <div class="flex justify-center gap-4">
                                <form action="{{ route('ferias.destroy', $feria) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="px-5 py-2 bg-[#D24F6B] text-white rounded-xl font-bold hover:bg-[#485065] hover:scale-105 transition">
                                        {{ __('Sí, eliminar') }}
                                    </button>
                                </form>
                                <button @click="confirmDelete = false"
                                        class="px-5 py-2 bg-[#EAE2CF] dark:bg-[#485065] text-[#485065] dark:text-[#EAE2CF] rounded-xl font-bold hover:bg-[#588B71] hover:text-white dark:hover:bg-[#588B71] hover:scale-105 transition">
                                    {{ __('Cancelar') }}
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
