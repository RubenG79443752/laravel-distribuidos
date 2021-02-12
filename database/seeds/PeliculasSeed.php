<?php

use Illuminate\Database\Seeder;

class PeliculasSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('peliculas')->insert([
            
            'titulo' => 'la toalla del mojado',
            'clasificacion' => 'b',
            'genero' => 'comedia', //año-mes-dia
            'estreno' => 'noviembre',
            'duracion' => 90,
            'idioma_id' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
