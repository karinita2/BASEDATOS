<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grado extends Model
{
    //
    protected $table = "grados";

    protected $fillable = ['grado'];

    /*
    public function instituciones() 
    {
        return $this->belongsToMany('App\Institucion');
    }
    */
    //Relacion Grado-Seccion - Many to Many
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

}
