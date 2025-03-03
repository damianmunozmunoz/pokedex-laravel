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
        Schema::create('pokemons', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->double('peso');
            $table->double('altura');
            $table->string('genero');
            $table->unsignedBigInteger('tipo_id');
            $table->unsignedBigInteger('generacion_id');
            $table->unsignedBigInteger('objeto_id')->nullable();
            $table->unsignedBigInteger('habilidad_id')->nullable();

            $table->foreign('tipo_id')->references('id')->on('tipos')->onDelete('cascade');
            $table->foreign('generacion_id')->references('id')->on('generacion')->onDelete('cascade');
            $table->foreign('objeto_id')->references('id')->on('objetos')->onDelete('cascade');
            $table->foreign('habilidad_id')->references('id')->on('habilidades')->onDelete('cascade');
    
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pokemons');
    }
};
