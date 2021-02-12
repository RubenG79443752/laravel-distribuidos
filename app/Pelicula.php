<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    protected $table = 'peliculas';
    public function idioma(){
        return $this->belongsTo('App\Idioma'); // un idioma una pelicula
    }
    public function personas(){
        return $this->belongsToMany('App\Persona');
    }
    
}
