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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombreProducto');
            $table->string('precioUnitario');
            $table->string('stockMinimo');
            $table->string('stockMaximo');
            $table->string('cantidad');
            $table->foreignId('categoria_id')
            ->constrained('categorias')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreignId('subcategoria_id')
            ->constrained('subcategorias')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreignId('estante_id')
            ->constrained('estantes')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
