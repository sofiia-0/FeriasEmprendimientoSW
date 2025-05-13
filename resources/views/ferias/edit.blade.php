@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Feria</h1>

    <form action="{{ route('ferias.update', $feria) }}" method="POST">
        @csrf
        @method('PUT')

        <input type="text" name="nombre" value="{{ $feria->nombre }}" class="block mb-3">
        <input type="date" name="fecha_evento" value="{{ $feria->fecha_evento->format('Y-m-d') }}" class="block mb-3">
        <input type="time" name="hora_evento" value="{{ $feria->hora_evento }}" class="block mb-3">
        <input type="text" name="lugar" value="{{ $feria->lugar }}" class="block mb-3">
        <textarea name="descripcion" class="block mb-3">{{ $feria->descripcion }}</textarea>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Actualizar</button>
    </form>
</div>
@endsection
