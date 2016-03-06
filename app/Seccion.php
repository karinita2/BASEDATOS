<?php

namespace Escuelas;

use Illuminate\Database\Eloquent\Model;

class Seccion extends Model
{
    //
    protected $table = "secciones";

    protected $fillable = ['seccion'];

    public function cmedicas() 
    {
        return $this->belongsToMany('App\Grado');
    }
    
    public function materias() 
    {
        return $this->belongsToMany('App\Materia');
    }


}
