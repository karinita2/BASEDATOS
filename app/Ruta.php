<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruta extends Model
{
    //
    protected $table = "rutas";

    protected $fillable = ['ruta','institucion_id'];

    
    public function alumnos()
    {
    	return $this->hasMany('App\Alumno');
    }

    public function institucion()
    {
    	return $this->belongsTo('App\Institucion');
    }



}
