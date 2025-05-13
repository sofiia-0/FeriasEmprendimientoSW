@extends('layouts.app')

@section('content')
    <div class="container text-white">
        <h1 class="text-3xl font-bold mb-4">Ferias disponibles</h1>

        <a href="{{ route('ferias.create') }}" class="bg-green-500 text-white py-2 px-4 rounded-md">Crear Nueva Feria</a>

        <ul class="mt-4">
            @foreach($ferias as $feria)
                <li class="mb-4 border-b border-gray-700 pb-4">
                    <strong>{{ $feria->nombre }}</strong><br>
                    Fecha: {{ $feria->fecha_evento->format('Y-m-d') }}<br>
                    Hora: {{ \Carbon\Carbon::parse($feria->hora_evento)->format('g:i A') }}<br>
                    Lugar: {{ $feria->lugar }}<br>
                    Descripción: {{ $feria->descripcion }}<br>

                    <!-- Botones de acción -->
                    <div class="mt-2 flex space-x-2">
                        <!-- Botón Editar -->
                        <a href="{{ route('ferias.edit', $feria) }}"
                           class="bg-yellow-500 text-black px-3 py-1 rounded">Editar</a>

                        <!-- Botón Eliminar -->
                        <form action="{{ route('ferias.destroy', $feria) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar esta feria?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-600 text-white px-3 py-1 rounded">Eliminar</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
