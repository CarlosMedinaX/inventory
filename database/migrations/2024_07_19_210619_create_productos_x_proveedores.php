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
        Schema::create('productos_x_suppliers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('producto_id')
            ->constrained('productos')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreignId('supplier_id')
            ->constrained('suppliers')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos_x_proveedores');
    }
};
