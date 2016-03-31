<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    //
    protected $table = "docentes";

    protected $fillable = ['id'];
    /*
    public function materias() 
    {
        return $this->belongsToMany('App\Materia');
    }
    */

    public function institucion_configs()
    {
        return $this->hasMany('App\InstitucionConfig');
    }


    public function trabajador() 
    {
        return $this->belongsTo('App\Trabajador','id','id');
    }

    public function materia_configs() 
    {
        return $this->belongsToMany('App\MateriaConfig');
    }

}