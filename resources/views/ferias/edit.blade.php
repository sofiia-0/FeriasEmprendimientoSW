<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight text-center">
            {{ __('Editar Feria') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-md mx-auto bg-white shadow-md rounded-lg p-8">
            <form action="{{ route('ferias.update', $feria) }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')

                <!-- Nombre -->
                <div class="mb-4">
                    <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre de la Feria</label>
                    <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $feria->nombre) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                </div>

                <!-- Fecha del Evento -->
                <div class="mb-4">
                    <label for="fecha_evento" class="block text-sm font-medium text-gray-700">Fecha del Evento</label>
                    <input type="date" name="fecha_evento" id="fecha_evento" value="{{ old('fecha_evento', $feria->fecha_evento->format('Y-m-d')) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                </div>

                <!-- Hora del Evento -->
                <div class="mb-4">
                    <label for="hora_evento" class="block text-sm font-medium text-gray-700">Hora del Evento</label>
                    <input type="time" name="hora_evento" id="hora_evento" value="{{ old('hora_evento', $feria->hora_evento) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                </div>

                <!-- Lugar -->
                <div class="mb-4">
                    <label for="lugar" class="block text-sm font-medium text-gray-700">Lugar</label>
                    <input type="text" name="lugar" id="lugar" value="{{ old('lugar', $feria->lugar) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                </div>

                <!-- Descripción -->
                <div class="mb-4">
                    <label for="descripcion" class="block text-sm font-medium text-gray-700">Descripción</label>
                    <textarea name="descripcion" id="descripcion" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">{{ old('descripcion', $feria->descripcion) }}</textarea>
                </div>

                <div>
                    <button type="submit"
                        class="w-full inline-flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        {{ __('Actualizar Feria') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
