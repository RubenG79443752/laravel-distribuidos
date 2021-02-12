<?php

use Illuminate\Database\Seeder;

class IdiomasSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('idiomas')->insert([
            //id => 1 esto es por defecto
            'nombre' => 'español',
            'sigla' => 'ES',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ]);
    }
}
