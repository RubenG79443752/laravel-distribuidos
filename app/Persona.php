<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
        protected $table = 'personas';
         protected $fillable = ['nombre','apellidos','direccion','ci'];  //phpnombres de atributos
         public function user(){//para relacionar de 1 a 1 user nomas sin s se  utiliza s cuando es de 1 a muchos NESECITA UNA RELACION INVERSA
                 return $this->hasOne('App\User');
         }
     
        public function peliculas(){
                return $this->belongsToMany('App\Pelicula');
        }
                //  public function peliculas(){
        //          return$this->belongsToMany('App\Pelicula')
        //                 ->withTimestamps()
        //                 ->withPivot('cantidad');
        // }
        //muchos a muchos la tabla se hace en cualquiera 
}