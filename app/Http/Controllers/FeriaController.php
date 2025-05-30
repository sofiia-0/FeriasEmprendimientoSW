<?php

namespace App\Http\Controllers;

use App\Models\Feria; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FeriaController extends Controller
{
    //mostrar todas las ferias
    public function index()
    {
        $ferias = Feria::all(); // Obtener todas las ferias
        return view('ferias.index', compact('ferias'));
    }

     // Mostrar el formulario de creación de feria
    public function create()
    {
        return view('ferias.create');
    }

    // Guardar la nueva feria
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'fecha_evento' => 'required|date',
            'hora_evento' => 'required|date_format:H:i',
            'lugar' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
        ]);

        Feria::create($request->all());

        return redirect()->route('ferias.index')->with('success', 'Feria creada correctamente.');
    }

    // Mostrar formulario de edición
public function edit(Feria $feria)
{
    return view('ferias.edit', compact('feria'));
}

// Actualizar en la base de datos
public function update(Request $request, Feria $feria)
{
    $request->validate([
        'nombre' => 'required|string|max:255',
        'fecha_evento' => 'required|date',
        'hora_evento' => 'required|date_format:H:i',
        'lugar' => 'required|string|max:255',
        'descripcion' => 'nullable|string',
    ]);

    $feria->update($request->all());

    return redirect()->route('ferias.index')->with('success', 'Feria actualizada correctamente.');
}

// Eliminar una feria
public function destroy(Feria $feria)
{
    $feria->delete();
    return redirect()->route('ferias.index')->with('success', 'Feria eliminada correctamente.');
}


public function register(Feria $feria)
{
    $user = Auth::user();

    // Evitar duplicados
    if (!$user->ferias->contains($feria->id)) {
        $user->ferias()->attach($feria->id);
    }

    return redirect()->route('ferias.index')->with('success', 'Te has registrado a la feria.');
}

public function misFerias()
{
    $user = auth()->user();
    $misFerias = $user->ferias;  // Relación muchos a muchos que definiste en User.php

    return view('ferias.mis_ferias', compact('misFerias'));
}

}
