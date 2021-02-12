<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()/*como vector [] */
    {
        DB::table('personas')->insert([
            //id => 1 esto es por defecto
            'nombres' => 'Juan',
            'apellido' => 'Montoya',
            'fec_nac' => '1990-12-05', //año-mes-dia
            'direccion' => 'av.las Banderas S/N',
            'ci' => '1020507020',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
