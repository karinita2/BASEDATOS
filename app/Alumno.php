<?php

namespace Escuelas;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    //
    protected $table = "alumnos";

    //protected $fillable = ['actividad'];

    public function ruta()
    {
    	return $this->belongsTo('App\Ruta');
    }


    public function talla()
    {
    	return $this->belongsTo('App\Talla');
    }

    public function representante()
    {
        return $this->belongsTo('App\Responsable');
    }

    public function padre()
    {
        return $this->belongsTo('App\Responsable');
    }

    public function madre()
    {
        return $this->belongsTo('App\Responsable');
    }






}
