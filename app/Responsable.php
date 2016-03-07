<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responsable extends Model
{
    //

    protected $table = "responsables";

    protected $fillable = ['vive_con_estudiante', 'es_representante'];


    public function trabajador()
    {
        return $this->belongsTo('App\Trabajador');
    }

    public function responsable() 
    {
        return $this->hasOne('App\Alumno');

    }
    public function padre() 
    {
        return $this->hasOne('App\Alumno');

    }
    public function madre() 
    {
        return $this->hasOne('App\Alumno');

    }


}
