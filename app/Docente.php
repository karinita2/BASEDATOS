<?php

namespace Escuelas;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    //
    protected $table = "docentes";

    //protected $fillable = ['cmedica'];

    public function materias() 
    {
        return $this->belongsToMany('App\Materia');
    }

    public function trabajador() 
    {
        return $this->belongsTo('App\Trabajador');
    }


}
