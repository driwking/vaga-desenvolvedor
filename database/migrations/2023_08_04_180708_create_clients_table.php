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
        Schema::create('clients', function (Blueprint $table) {
            $table->id(column:'id_cliente');
            $table->string(column:'nome_cliente',length:255);
            $table->char(column:'cpf_cliente', length:11);
            $table->string(column:'email_cliente',length:255);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
