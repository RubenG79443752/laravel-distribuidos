<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
        va a ser foranea se bora con 
        migrate:rollback despues borramos y cambiamos 
        la fecha de create usuario con 2014 a despues de la persona asi persona sera la primaria
        */
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('nombres', 20);
            $table->string('apellido', 30);
            $table->datetime('fec_nac');
            $table->string('direccion', 30);
            $table->string('ci',10)->unique();
            $table->timestamps();
            /*
            create_at: datetime
            update_at: datetime
            
            */
            /*
            atributos de la tabla persona
            Nombres: cadena (20)
            Apelido:cadena (30)
            fecha de nacimiento:fecha y hora
            direccion: cadena(30)
            nacionalidad: llave foranea
            ci: cadena (10)
            */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personas');
    }
}
