<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    //
    protected $table = "materias";

    protected $fillable = ['materia'];

    /*
    public function grados() 
    {
        return $this->belongsToMany('App\Grado');
    }
    */
    /*
    public function docentes() 
    {
        return $this->belongsToMany('App\Docente');
    }
    */
    public function institucion_configs()
    {
        return $this->hasMany('App\InstitucionConfig');
    }

}
