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
        Schema::create('continuar_viendos', function (Blueprint $table) {
            $table->id();  
            $table->unsignedBigInteger('perfil_id');       
            $table->foreign('perfil_id')->references('id')->on('perfils');

           
            $table->unsignedBigInteger('pelicula_id');         
            $table->foreign('pelicula_id')->references('id')->on('peliculas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('continuar_viendos');
    }
};
