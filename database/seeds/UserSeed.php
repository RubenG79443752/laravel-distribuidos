<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    
    {


        DB::table('users')->insert([
            'name' => 'Juan Montoya',
            'email' => 'juan_montoya@gmail.com',
            'password' => bcrypt('montoya'),
            'persona_id'=> 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            //bcrypt es para encriptar  por consola tambien hay
         ]);
    }
}
