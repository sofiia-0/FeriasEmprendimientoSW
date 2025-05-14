<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-bold text-3xl text-gray-900 dark:text-white tracking-tight">
                {{ __('Ferias disponibles') }}
            </h2>
            <a href="{{ route('ferias.create') }}"
               class="inline-flex items-center gap-2 px-5 py-2 bg-gradient-to-r from-green-600 to-emerald-600 text-white text-base font-semibold rounded-xl shadow-lg hover:from-green-700 hover:to-emerald-700 transition-all duration-200">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                     viewBox="0 0 24 24">
                    <path d="M12 4v16m8-8H4"></path>
                </svg>
                {{ __('Crear Nueva Feria') }}
            </a>
        </div>
    </x-slot>

    <div class="py-12 bg-gradient-to-br from-gray-50 via-white to-green-50 dark:from-gray-900 dark:via-gray-800 dark:to-green-950 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                @foreach($ferias as $feria)
                    <div
                        x-data="{ confirmDelete: false }"
                        :class="confirmDelete ? 'border-red-500' : 'border-gray-200 dark:border-gray-800'"
                        class="bg-white dark:bg-gray-900 border shadow-xl rounded-2xl p-6 hover:scale-[1.02] hover:shadow-2xl transition-all duration-200"
                    >
                        <!-- Contenido de la feria (oculto cuando confirmDelete es true) -->
                        <div x-show="!confirmDelete" x-transition class="flex flex-col items-start">
                            <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-2">{{ $feria->nombre }}</h3>
                            <p class="text-gray-600 dark:text-gray-300">📅 Fecha: {{ $feria->fecha_evento->format('Y-m-d') }}</p>
                            <p class="text-gray-600 dark:text-gray-300">⏰ Hora: {{ \Carbon\Carbon::parse($feria->hora_evento)->format('g:i A') }}</p>
                            <p class="text-gray-600 dark:text-gray-300">📍 Lugar: {{ $feria->lugar }}</p>
                            <p class="text-gray-600 dark:text-gray-300 mt-2">{{ $feria->descripcion }}</p>

                            <!-- Botones de acción (Editar y Eliminar) -->
                            <div class="mt-4 flex justify-start space-x-3">
                                <a href="{{ route('ferias.edit', $feria) }}"
                                   class="px-4 py-2 bg-yellow-400 text-black font-semibold rounded-xl shadow hover:bg-yellow-500 transition">
                                    {{ __('Editar') }}
                                </a>
                                <button @click="confirmDelete = true"
                                        class="px-4 py-2 bg-red-100 text-red-700 font-semibold rounded-xl hover:bg-red-200 transition">
                                    {{ __('Eliminar') }}
                                </button>
                            </div>
                        </div>

                        <!-- Mensaje de confirmación y botones (cuando confirmDelete es true) -->
                        <div x-show="confirmDelete" x-transition class="flex flex-col items-center text-center mt-6">
                            <p class="text-red-600 font-semibold mb-3">{{ __('¿Estás seguro de eliminar?') }}</p>
                            <div class="flex justify-center gap-4">
                                <form action="{{ route('ferias.destroy', $feria) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="px-4 py-2 bg-red-600 text-white rounded-xl hover:bg-red-700 transition">
                                        {{ __('Sí, eliminar') }}
                                    </button>
                                </form>
                                <button @click="confirmDelete = false"
                                        class="px-4 py-2 bg-gray-300 dark:bg-gray-700 text-gray-800 dark:text-white rounded-xl hover:bg-gray-400 dark:hover:bg-gray-600 transition">
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
