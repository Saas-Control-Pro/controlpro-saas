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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
               $table->foreignId('empresa_id')->constrained()->onDelete('cascade');
        $table->string('codigo')->nullable();
        $table->string('nombre');
        $table->text('descripcion')->nullable();
        $table->decimal('precio_compra', 10, 2)->default(0);
        $table->decimal('precio_venta', 10, 2);
        $table->string('unidad')->default('unidad');
        $table->enum('estado', ['activo', 'inactivo'])->default('activo');
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
        Schema::dropIfExists('productos');
    }
};
