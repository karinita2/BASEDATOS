<?php

namespace Escuelas;

use Illuminate\Database\Eloquent\Model;

class Grado extends Model
{
    //
    protected $table = "grados";

    protected $fillable = ['grado'];

    public function instituciones() 
    {
        return $this->belongsToMany('App\Institucion');
    }
    
    public function secciones() 
    {
        return $this->belongsToMany('App\Seccion');
    }

}
