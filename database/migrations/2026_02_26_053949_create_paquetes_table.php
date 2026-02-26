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
      Schema::create('paquetes', function (Blueprint $table) {
    $table->id();
    $table->string('codigo')->unique();          // Código de paquete

    // Relaciones SaaS
    $table->foreignId('empresa_id')->constrained('empresas')->cascadeOnDelete();
    $table->foreignId('sucursal_id')->constrained('sucursals')->cascadeOnDelete();
    $table->foreignId('usuario_id')->constrained('users')->cascadeOnDelete();       // cliente
    $table->foreignId('motorista_id')->nullable()->constrained('users')->nullOnDelete(); // motorista asignado

    $table->enum('estado', ['Nuevo','En_Bodega','en_ruta','entregado','No_Recibido','cancelado'])->default('Nuevo');

    // Medidas y precio
    $table->string('descripcion')->nullable();
    $table->decimal('precio', 10, 2)->nullable();
    $table->decimal('alto', 8, 2)->nullable();
    $table->decimal('ancho', 8, 2)->nullable();
    $table->decimal('largo', 8, 2)->nullable();
    $table->decimal('peso', 8, 2)->nullable();

    // Destinatario
    $table->string('nombre_destinatario')->nullable();
    $table->string('telefono_destinatario')->nullable();
    $table->string('email_destinatario')->nullable();
    $table->string('direccion_origen')->nullable();
    $table->string('direccion_destino')->nullable();
    $table->enum('fragilidad', ['Frágil', 'No Frágil'])->default('No Frágil');

    $table->timestamps();

    // Índices para optimizar búsquedas SaaS
    $table->index(['empresa_id', 'sucursal_id', 'estado']);
});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paquetes');
    }
};
