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
        Schema::create('products', function (Blueprint $table) {
            $table->id(column:'id_produto');
            $table->string(column:'sku_produto',length:100);
            $table->text(column:'descricao');
            $table->string(column:'titulo_product',length:100);
            $table->decimal(column:'preco',total: 10,places: 2);
            $table->integer(column:'estoque');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
