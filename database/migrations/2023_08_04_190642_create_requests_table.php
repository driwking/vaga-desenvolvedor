<?php

use App\Models\Products;
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
        Schema::create('requests', function (Blueprint $table) {
            $table->id(column:'codigo_pedido');
            $table->foreignId(column:'id_produto')->constrained(table:'products', column:'id_produto');
            $table->foreignId(column:'id_cliente')->constrained(table:'clients', column:'id_cliente');
            $table->dateTime(column:'data_pedido');
            $table->decimal(column:'preco_final',total:10,places:2);
            $table->string(column:'status',length:30);

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requests');
    }
};
