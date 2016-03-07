<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruta extends Model
{
    //
    protected $table = "rutas";

    protected $fillable = ['ruta'];

    
    public function alumnos()
    {
    	return $this->hasMany('App\Alumno');
    }



}
