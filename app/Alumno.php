<?php

namespace App;

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
    
    //Relacion alumno-responsable One To One
    public function representante()
    {
        return $this->belongsTo('App\Responsable','representante_id','id');
    }

    public function padre()
    {
        return $this->belongsTo('App\Responsable','padre_id','id');
    }

    public function madre()
    {
        return $this->belongsTo('App\Responsable','madre_id','id');
    }

    public function c_medicas() 
    {
        return $this->belongsToMany('App\CMedica');
    }

    public function actividades() 
    {
        return $this->belongsToMany('App\Actividad');
    }
    
    public function user()
    {
        return $this->belongsTo('App\User','id','id');
    }


}
