<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // La tabla ferias debe contener los siguientes campos: nombre de la feria, fecha
        // del evento, lugar o dirección donde se realizará, y una descripción general del
        // evento.
        Schema::create('feria', function (Blueprint $table) {
            $table->id();
            $table->string('nombre'); 
            $table->date('fecha_evento'); 
            $table->time('hora_evento'); 
            $table->string('lugar'); 
            $table->text('descripcion'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feria');
    }
};
