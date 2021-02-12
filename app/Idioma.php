<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Idioma extends Model
{
    protected $table = 'idiomas';
    public function peliculas (){//para relacionar de 1 a muchos user nomas sin s se  utiliza s cuando es de 1 a muchos NESECITA UNA RELACION INVERSA
        return $this->hasMany('App\Pelicula');
     } //hasmany es para muchos
}
