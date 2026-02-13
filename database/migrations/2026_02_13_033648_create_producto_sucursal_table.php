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
        Schema::create('producto_sucursal', function (Blueprint $table) {
        $table->id();
        $table->foreignId('empresa_id')->constrained()->onDelete('cascade');
        $table->foreignId('producto_id')->constrained()->onDelete('cascade');
        $table->foreignId('sucursal_id')->constrained()->onDelete('cascade');
        $table->integer('stock')->default(0);
        $table->integer('stock_minimo')->default(0);
        $table->timestamps();

        $table->unique(['producto_id', 'sucursal_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto_sucursal');
    }
};
