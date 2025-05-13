<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feria extends Model
{

    protected $table = 'feria';

    protected $fillable = [
        'nombre',
        'fecha_evento',
        'hora_evento',
        'lugar',
        'descripcion',
    ];

    protected $casts = [
    'fecha_evento' => 'date',
    'hora_evento' => 'datetime:H:i',
];
}
