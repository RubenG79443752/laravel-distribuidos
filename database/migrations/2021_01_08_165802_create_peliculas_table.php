<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeliculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peliculas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 50);
            $table->string ('clasificacion', 1)->default('A');/* POR DEFECTO */
            $table->string('genero', 30);
            $table->string('estreno', 40);
            $table->integer('duracion');
            $table->unsignedBigInteger('idioma_id');
            $table->foreign('idioma_id')->references('id')->on('idiomas');
            $table->timestamps();
        });
        /* para la tabla relacion protagonistas  de forma asecendente l antes de r 'pelicula_persona' */
        Schema::create('pelicula_persona', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pelicula_id');
            $table->unsignedBigInteger('persona_id');
            $table->foreign('pelicula_id')->references('id')->on('peliculas');
            $table->foreign('persona_id')->references('id')->on('personas');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    /*eliminacion alreves pelicula persona y despues peliculas */
    public function down()
    {
        Schema::dropIfExists('pelicula_persona');
        Schema::dropIfExists('peliculas');
    }
}
