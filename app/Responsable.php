<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responsable extends Model
{
    //

    protected $table = "responsables";

    protected $fillable = ['vive_con_estudiante', 'es_representante'];

    //Relacion responsable-trabajador One To One
    public function trabajador()
    {
        return $this->belongsTo('App\Trabajador','id','id');
    }
    
    //Relacion alumno-responsable One To One -- Que alumno tiene responsabilizado
    public function alumno_res() 
    {
        return $this->hasOne('App\Alumno','representante_id','id');

    }
    //Relacion alumno-padre One To One  -- Que alumno es hijo 
    public function alumno_pad() 
    {
        return $this->hasOne('App\Alumno','padre_id','id');

    }
    //Relacion alumno-madre One To One -- -- Que alumno es hijo 
    public function alumno_mad() 
    {
        return $this->hasOne('App\Alumno','madre_id','id');

    }


}
