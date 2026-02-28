<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rutas', function (Blueprint $table) {
            $table->id();
          $table->foreignId('sucursal_id')->constrained('sucursals')->cascadeOnDelete();
            $table->foreignId('motorista_id')->constrained('users')->cascadeOnDelete();
            $table->string('nombre_ruta');
            $table->enum('estado', ['pendiente', 'en_progreso', 'completada'])->default('pendiente');
            $table->date('fecha_ruta');
            $table->timestamps();

             // Índices para optimizar búsquedas SaaS
             $table->index(['sucursal_id', 'motorista_id', 'estado']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rutas');
    }
};
