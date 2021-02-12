<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PersonSeed::class);
        $this->call(UserSeed::class);
        $this->call(IdiomasSeed::class);
        $this->call(PeliculasSeed::class);
        $this->call(pelicula_personaSeed::class);
    }
}
