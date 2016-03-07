<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    //
    protected $table = "materias";

    protected $fillable = ['materia'];

    public function secciones() 
    {
        return $this->belongsToMany('App\Seccion');
    }
    
    public function docentes() 
    {
        return $this->belongsToMany('App\Docente');
    }


}
