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
        Schema::create('motorista_detalles', function (Blueprint $table) {
              $table->id();
      $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
    $table->foreignId('empresa_id')->constrained('empresas')->cascadeOnDelete();
    $table->foreignId('sucursal_id')->nullable()->constrained('sucursals')->nullOnDelete();
    $table->string('placa_vehiculo')->nullable();
    $table->string('tipo_vehiculo')->nullable();
    $table->string('licencia_conducir')->nullable();
    $table->decimal('calificacion', 3, 2)->default(0.00);
    $table->integer('total_viajes')->default(0);
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
        Schema::dropIfExists('motorista_detalles');
    }
};
