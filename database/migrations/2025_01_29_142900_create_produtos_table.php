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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id()->autoIncrement()->primary();
            $table->string('nome', 100)->nullable();
            $table->string('descriao', 500)->nullable();
            $table->float('preco')->nullable();
            $table->string('imagem')->nullable();
            $table->integer('estoque')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
