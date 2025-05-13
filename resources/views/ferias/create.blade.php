@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crear Nueva Feria</h1>
        
        <form action="{{ route('ferias.store') }}" method="POST">
            @csrf

            <!-- Nombre -->
            <div class="mb-4">
                <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre de la Feria</label>
                <input type="text" name="nombre" id="nombre" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
            </div>

            <!-- Fecha del Evento -->
            <div class="mb-4">
                <label for="fecha_evento" class="block text-sm font-medium text-gray-700">Fecha del Evento</label>
                <input type="date" name="fecha_evento" id="fecha_evento" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
            </div>

            <!-- Hora del Evento -->
            <div class="mb-4">
                <label for="hora_evento" class="block text-sm font-medium text-gray-700">Hora del Evento</label>
                <input type="time" name="hora_evento" id="hora_evento" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
            </div>

            <!-- Lugar -->
            <div class="mb-4">
                <label for="lugar" class="block text-sm font-medium text-gray-700">Lugar</label>
                <input type="text" name="lugar" id="lugar" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
            </div>

            <!-- Descripción -->
            <div class="mb-4">
                <label for="descripcion" class="block text-sm font-medium text-gray-700">Descripción</label>
                <textarea name="descripcion" id="descripcion" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"></textarea>
            </div>

            <!-- Botón de Enviar -->
            <div class="mb-4">
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md">Crear Feria</button>
            </div>
        </form>
    </div>
@endsection
