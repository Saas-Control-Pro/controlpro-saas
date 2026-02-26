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
        Schema::table('users', function (Blueprint $table) {
            //
                $table->foreignId('empresa_id')
          ->nullable()
          ->constrained()
          ->onDelete('cascade');

    $table->foreignId('sucursal_id')
          ->nullable()
          ->constrained()
          ->onDelete('set null');

    $table->enum('rol', ['cliente','recepcion', 'clasificador', 'mensajero', 'despachador', 'administrador', 'auditor', 'admin','propietario'])->default('cliente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->dropColumn(['empresa_id', 'sucursal_id', 'rol']);
        });
    }
};
