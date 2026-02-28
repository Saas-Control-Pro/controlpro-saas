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
        Schema::create('rutas_paquetes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ruta_id')->constrained('rutas')->cascadeOnDelete();
            $table->foreignId('paquete_id')->constrained('paquetes')->cascadeOnDelete();
            $table->boolean('cargado')->default(false);
            $table->boolean('entregado')->default(false);
            $table->string('observaciones')->nullable();
            $table->date('fecha_entregado')->nullable();
            
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rutas_paquetes');
    }
};
