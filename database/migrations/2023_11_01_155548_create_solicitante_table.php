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
        Schema::create('solicitante', function (Blueprint $table) {
            
                $table->increments('ID_solicitante'); // Clave primaria autoincremental
                $table->string('Nombre');
                $table->string('Cedula');
                $table->string('Telefono');
                $table->string('Correo');
                $table->string('Direccion');
                $table->unsignedInteger('Ocupacion_id'); // Clave foránea
                $table->timestamps(); // Campos created_at y updated_at para el control de tiempo
    
                // Definir las claves foráneas
                $table->foreign('Ocupacion_id')->references('ID_ocupacion')->on('ocupacion');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicitante');
    }
};
